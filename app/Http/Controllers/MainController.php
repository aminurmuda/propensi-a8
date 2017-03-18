<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SSO\SSO;
use App\Pegawai;
use DB;


class MainController extends Controller
{
	/**
	 * Method login dijalankan ketika pengguna telah memasukkan username dan password kedalam SSO
	 * 
	 * @param Request $request untuk session
	 * @return view home untuk masing-masing role.
	 */
	public function login(Request $request)
	{
		if(!SSO::check())
			SSO::authenticate();
		return redirect()->route('home');
	}

	/**
	 * Method logout dijalankan ketika pengguna ingin keluar dari modul
	 * 
	 * @param Request $request untuk session
	 * @return kembali ke halaman root (utama)
	 */
	public function logout(Request $request)
	{
		$request->session()->pull('user');
		$request->session()->pull('role');
		return SSO::logout(url('/'));
	}

	public function lihatPengguna($kode_prodi) {
		$timAkreditasi = Pegawai::getTimAkreditasiByProdi($kode_prodi);
			// dd($timAkreditasi);

			return view('kelola', [
				'timAkreditasi' => $timAkreditasi
			]);
	}

	public function home(Request $request)
	{
		$user = SSO::getUser();
		$username = $user->username;
		$request->session()->put('user', $username);

		//Mencari pegawai berdasarkan username sso yang login
		$userPegawai = Pegawai::getPegawaiByUsername($username);		

		//Validasi apakah yang login merupakan pegawai atau bukan
		if($userPegawai) {
			$userIsPimpinan = Pegawai::getPegawaiIsPimpinan($username);
			$userIsTimAkreditasi = Pegawai::getPegawaiIsTimAkreditasi($username);
			$kodeFakultas = Pegawai::getFakultasPegawai($username);
			//Validasi jika yang login merupakan pimpinan
			if($userIsPimpinan) {
				$request->session()->put('role', 'Pimpinan');
				return view ('home', [
					'user' => $user,
					'role' => 'Pimpinan',
					'kode_fakultas' => $kodeFakultas[0]->kode_fakultas,
					]);
			} elseif($userIsTimAkreditasi){	//Validasi jika yang login merupakan tim akreditasi

				$request->session()->put('role', 'Tim Akreditasi');
				return view ('home', [
					'user' => $user,
					'role' => 'Tim Akreditasi',
					'kode_fakultas' => $kodeFakultas[0]->kode_fakultas
					]
					);
			}
		} else {
			return view ('logingagal', [
					'user' => $user]);
		}
	}	
}

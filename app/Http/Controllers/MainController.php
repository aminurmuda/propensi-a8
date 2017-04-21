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
	 * @return route home untuk menampilkan beranda untuk masing-masing role
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

	/**
	 * Method home dijalankan ketika pengguna ingin keluar dari modul
	 * 
	 * @param Request $request untuk session
	 * @return view halaman utama sesuai masing-masing role
	 */
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
			$userIsReviewerProdi = Pegawai::getPegawaiIsReviewerProdi($username);
			$userIsReviewerUniv = Pegawai::getPegawaiIsReviewerUniv($username);
			$userIsAdmin = Pegawai::getPegawaiIsAdmin($username);
			$kodeFakultas = Pegawai::getFakultasPegawai($username);
			if($userIsPimpinan) {
				
				//validasi isBPMA, isPimpinanFakultas,isPimpinanUniv
				$pimpinan = Pegawai::getPimpinanPegawai($username);
				$isBPMA = $pimpinan[0] -> isBPMA;
				$isPimpinanFakultas = $pimpinan[0] -> isPimpinanFakultas;
				$role='';

				if($isBPMA == 1) {
					$role = 'BPMA';
				} else if ($isPimpinanFakultas == 1) {
					$role='Pimpinan Fakultas';
				} else {
					$role='Pimpinan Universitas';
				} 
				$request->session()->put('role', $role);
				return view ('home', [
					'user' => $username,
					'role' => $role,
					'kode_fakultas' => $kodeFakultas[0]->kode_fakultas,
					]);

			} elseif($userIsTimAkreditasi){	//Validasi jika yang login merupakan tim akreditasi

				$request->session()->put('role', 'Tim Akreditasi');;
				return view ('home', [
					'user' => $username,
					'role' => 'Tim Akreditasi',
					'kode_fakultas' => $kodeFakultas[0]->kode_fakultas
					]
					);
			} elseif($userIsAdmin) { //admin
				$request->session()->put('role', 'Admin');;
				return view ('home', [
					'user' => $username,
					'role' => 'Admin',
					'kode_fakultas' => $kodeFakultas[0]->kode_fakultas
					]
					);
			} elseif($userIsReviewerProdi) { //reviewer prodi
				$request->session()->put('role', 'Reviewer Prodi');;
				return view ('home', [
					'user' => $username,
					'role' => 'Reviewer Prodi',
					'kode_fakultas' => $kodeFakultas[0]->kode_fakultas
					]
					);
			} else { //reviewer univ
				$request->session()->put('role', 'Reviewer Universitas');;
				return view ('home', [
					'user' => $username,
					'role' => 'Reviewer Universitas',
					'kode_fakultas' => $kodeFakultas[0]->kode_fakultas
					]
					);
			}
		} else {
			return view ('logingagal', [
					'user' => $username]);
		}
	}	
}

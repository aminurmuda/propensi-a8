<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SSO\SSO;
use App\Pegawai;
use DB;


class MainController extends Controller
{
	public function login(Request $request)
	{
		if(!SSO::check())
			SSO::authenticate();

		$user = SSO::getUser();
		$username = $user->username;
		$request->session()->put('user', $username);

		//Mencari pegawai berdasarkan username sso yang login
		$userPegawai = Pegawai::getPegawaiByUsername($username);		

		//Validasi apakah yang login merupakan pegawai atau bukan
		if($userPegawai) {
			$userIsPimpinan = Pegawai::getPegawaiIsPimpinan($username);
			$userIsTimAkreditasi = Pegawai::getPegawaiIsTimAkreditasi($username);
			//Validasi jika yang login merupakan pimpinan
			if($userIsPimpinan) {
				return view ('home', [
					'user' => $user]);
			} elseif($userIsTimAkreditasi){	//Validasi jika yang login merupakan tim akreditasi
				return view ('home', [
					'user' => $user]);
			}
		} else {
			return view ('logingagal', [
					'user' => $user]);
		}
	}

	public function logout(Request $request)
	{
		$request->session()->pull('user');
		return SSO::logout();
	}


	public function lihatPengguna($kode_prodi) {
		$timAkreditasi = Pegawai::getTimAkreditasiByProdi($kode_prodi);
			// dd($timAkreditasi);

			return view('kelola', [
				'timAkreditasi' => $timAkreditasi
			]);
	}

	public function hapusPengguna($kode_prodi,$username){
		$timAkreditasi = Pegawai::deleteTimAkreditasi($username);
		 //echo $kode_prodi;
		MainController::lihatPengguna($kode_prodi);
	}

}

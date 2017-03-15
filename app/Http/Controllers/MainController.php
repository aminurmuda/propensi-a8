<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SSO\SSO;
use App\Pegawai;
use DB;

class MainController extends Controller
{
	public function login()
	{
		if(!SSO::check())
			SSO::authenticate();

		$user = SSO::getUser();
		$username = $user->username;

		$userPegawai = Pegawai::getPegawaiByUsername($username);		

		if($userPegawai) {
			$userIsPimpinan = Pegawai::getPegawaiIsPimpinan($username);
			$userIsTimAkreditasi = Pegawai::getPegawaiIsTimAkreditasi($username);
			/*return view('secret', [
				'user' => $user
			]);*/
			if($userIsPimpinan) {
				echo 'Kamu Pimpinan';
			} elseif($userIsTimAkreditasi){
				echo 'Kamu Tim Akreditasi Yah';
			}
		} else {
			echo 'Mohon Maaf Kamu Tidak memiliki akses';
		}
	}

	public function logout()
	{
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
		// echo $kode_prodi;
		MainController::lihatPengguna($kode_prodi);
	}

}
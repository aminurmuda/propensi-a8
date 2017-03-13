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

		$userIsPimpinan = Pegawai::getPegawaiIsPimpinan($username);
		$userIsTimAkreditasi = Pegawai::getPegawaiIsTimAkreditasi($username);
		if($userIsPimpinan) {
			/*return view('secret', [
				'user' => $user
			]);*/
			echo 'Kamu Pimpinan';
		} elseif ($userIsTimAkreditasi) {
			echo 'Kamu Tim Akreditasi Yah';
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
			dd($timAkreditasi);
	}
}
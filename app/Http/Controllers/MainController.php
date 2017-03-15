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
}
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

		$userPegawai = Pegawai::getPegawaiByUsername($username);		

		if($userPegawai) {
			$userIsPimpinan = Pegawai::getPegawaiIsPimpinan($username);
			$userIsTimAkreditasi = Pegawai::getPegawaiIsTimAkreditasi($username);
			/*return view('secret', [
				'user' => $user
			]);*/
			$request->session()->put('user', $username);
			if($userIsPimpinan) {
				echo 'Kamu Pimpinan';
				// echo $request->session()->get('user');
			} elseif($userIsTimAkreditasi){
				echo 'Kamu Tim Akreditasi Yah';
				// echo $request->session()->get('user');
			}
		} else {
			echo 'Mohon Maaf Kamu Tidak memiliki akses';
		}
	}

	public function logout(Request $request)
	{
		$request->session()->pull('user');
		return SSO::logout();
	}
}

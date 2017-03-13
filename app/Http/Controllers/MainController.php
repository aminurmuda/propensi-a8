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
		// echo $username;

		/*$isTimAkreditasi = DB::select('select isTimAkreditasi from pegawai where username = :username', ['username' => $username]);
		dd($isTimAkreditasi[0]->isTimAkreditasi);*/

		$users = Pegawai::getPegawaiByUsername($username);

		dd($users);

		/*$id = $isTimAkreditasi->isTimAkreditasi;
		echo $id;*/
		/*if($isTimAkreditasi === 1) 
			return view('secret', [
				'user' => $user
		]);*/
	}

	public function logout()
	{
		return SSO::logout();
	}
}
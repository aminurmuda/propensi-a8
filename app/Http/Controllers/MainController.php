<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SSO\SSO;

class MainController extends Controller
{
	public function secret()
	{
		if(!SSO::check())
			SSO::authenticate();

		$user = SSO::getUser();

		return view('secret', [
			'user' => $user
		]);
	}

	public function logout()
	{
		return SSO::logout();
	}
}
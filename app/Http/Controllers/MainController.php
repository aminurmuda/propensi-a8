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
				$isUPMAF = $pimpinan[0] -> isUPMAF;
				$role='';

				if($isBPMA == 1) {
					$role = 'BPMA';
				} else if ($isPimpinanFakultas == 1) {
					$role='Pimpinan Fakultas';
				} else if ($isUPMAF == 1) {
					$role = 'UPMAF';
				} else {
					$role='Pimpinan Universitas';
				} 

				$request->session()->put('role', $role);

				if($role=='Pimpinan Fakultas' || $role=='UPMAF'){
					return redirect()->route('homepimpinan');
				}else{
					return redirect()->route('akreditasi/riwayat');
				}
				

			} elseif($userIsTimAkreditasi){	//Validasi jika yang login merupakan tim akreditasi

				$timAkreditasi = Pegawai::getTimAkreditasi($username);		
				$selectedProdi=$timAkreditasi[0]->id_prodi_tim_akreditasi;
				$request->session()->put('role', 'Tim Akreditasi');
				return redirect()->route('homestatus');
				
			} elseif($userIsAdmin) { //admin
				$request->session()->put('role', 'Admin');;
				return redirect()->route('homestatus');


			} elseif($userIsReviewerProdi) { //reviewer prodi
				$request->session()->put('role', 'Tim Reviewer');;
				return redirect()->route('homestatus');


			} elseif($userIsReviewerUniv) { //reviewer univ
				$request->session()->put('role', 'Reviewer Universitas');;
				return redirect()->route('homestatus');
		
			} else { //UPMAF
				$request->session()->put('role', 'UPMAF');;
				return redirect()->route('homeuniv');

			}
		} else {
			return view ('logingagal', [
					'user' => $username]);
		}
	}	
}

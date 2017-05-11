<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Pimpinan;
use App\program_studi;
use App\fakultas;
use App\dosen;
use App\tendik;
use App\Borang;
use App\proyek;
use App\kerja_sama;
use App\danaPengmas;
use App\pengmas_dosen;
use App\danaProyek;
use DB;

class BorangController extends Controller
{
    public function _construct(){
        
    }

    public function pilihBorang3A(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$role=$request->session()->get('role');
			

			return view('pilihborang3a',[
				'role' => $role,
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,
	            'kodeFakultas' => $kodeFakultasPengguna,       
	           'kode_fakultas' => $kodeFakultasPengguna,       
	            'username' => $username
			]);
	}

	public function pilihBorang3B(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$role=$request->session()->get('role');
			

			return view('pilihborang3b',[
				'role' => $role,
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,       
	           'kodeFakultas' => $kodeFakultasPengguna,       
	           'kode_fakultas' => $kodeFakultasPengguna,       
	            'username' => $username
			]);
	}

	public function lihatEvaluasi(Request $request) {


		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login

		$role=$request->session()->get('role');
			

		$evaluasiDiri_json = Borang::getBorang('EvaluasiDiri',null,$kodeProdi,2017);
		$isi = $evaluasiDiri_json[0]->isi;
		$evaluasiDiri= json_decode(stripslashes($isi),true);

		$role=$request->session()->get('role');
		if ($role=='Tim Akreditasi') {
			$timAkreditasi = Pegawai::getTimAkreditasi($username);		
			$selectedProdi=$timAkreditasi[0]->id_prodi_tim_akreditasi;
		} else {
		if ($kodeProdi){
			$selectedProdi = $kodeProdi; 	
			} else {
				$selectedProdi=$kodeProdiPengguna;
			}	
		}

		$prodiBorang = program_studi::getProdi($selectedProdi);
		if ($request->get('tahun')){
			$tahun = $request->get('tahun'); 	
		} else {
			$tahun = date('Y');
		}


			return view('viewevaluasi',[
				'role' => $role,
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,       

	            'username' => $username,

	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            'evaluasiDiri' => $evaluasiDiri,
	            'kodeProdi' => $kodeProdi,
	            'prodiBorang' => $prodiBorang,
	            'tahun' => $tahun

			]);
	}
}


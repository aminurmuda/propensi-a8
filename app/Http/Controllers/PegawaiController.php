<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use DB;

class PegawaiController extends Controller
{
    public function _construct(){
        
    }

    public function deleteTimAkreditasi($username){
    	// if ($request->session()->has('user')) {
    	Pegawai::deleteTimAkreditasi($username);
		return 'tim akreditasi berhasil dihapus';
		// } else {
    	// 	return view('landing');
    	// }
    }

    public function lihatPegawaiIsNotTimAkreditasi($kode_fakultas){
    	// if ($request->session()->has('user')) {
    	$pegawai = Pegawai::getAllPegawaiIsNotTimAkreditasi($kode_fakultas);
    	return view('listpegawai', [
            'pegawai' => $pegawai
        ]);
    	// } else {
    	// 	return view('landing');
    	// }
    }

    public function lihatPegawaiIsNotTimAkreditasiByUsername($username){
    	// if ($request->session()->has('user')) {
    	Pegawai::getPegawaiIsNotTimAkreditasiByUsername($username);
    	return 'terlihat berdasarkan username';
    	// } else {
    	// 	return view('landing');
    	// }

    }

    public function lihatPegawaiIsNotTimAkreditasiBy($no_pegawai){
    	// if ($request->session()->has('user')) {
    	Pegawai::getPegawaiIsNotTimAkreditasiByNIP($no_pegawai);
    	return 'terlihat berdasarkan NIP';
    	    	// } else {
    	// 	return view('landing');
    	// }
    }

    
    public function lihatPengguna($kode_fakultas, Request $request) {
    	// if ($request->session()->has('user')) {
	    	$timAkreditasi = Pegawai::getTimAkreditasiByFakultas($kode_fakultas);
			// dd($timAkreditasi);
			return view('kelola', [
					'timAkreditasi' => $timAkreditasi
			]);	
    	// } else {
    	// 	return view('landing');
    	// }
		
	}

	public function tambahPengguna($username) {
		Pegawai::addTimAkreditasi($username);
		return 'tim akreditasi berhasil ditambahkan';
	}

}

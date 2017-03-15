<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use DB;

class PegawaiController extends Controller
{
    public function deleteTimAkreditasi($username){
    	Pegawai::deleteTimAkreditasi($username);
		return 'tim akreditasi berhasil dihapus';
    }

    public function lihatPegawaiIsNotTimAkreditasi(){
    	Pegawai::getAllPegawaiIsNotTimAkreditasi();
    	return 'terlihat semua';
    }

    public function lihatPegawaiIsNotTimAkreditasiByUsername($username){
    	Pegawai::getPegawaiIsNotTimAkreditasiByUsername($username);
    	return 'terlihat berdasarkan username';

    }

    public function lihatPegawaiIsNotTimAkreditasiBy($no_pegawai){
    	Pegawai::getPegawaiIsNotTimAkreditasiByNIP($no_pegawai);
    	return 'terlihat berdasarkan NIP';
    }

    
    public function lihatPengguna($kode_prodi, Request $request) {
    	// if ($request->session()->has('user')) {
	    	$timAkreditasi = Pegawai::getTimAkreditasiByProdi($kode_prodi);
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use DB;

class PegawaiController extends Controller
{
    public function deleteTimAkreditasi(){
    	
    }

    public function addTimAkreditasi(){

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

	public function tambahPengguna($username){
		Pegawai::addTimAkreditasi($username);
		return 'tim akreditasi berhasil ditambahkan';
	}
}

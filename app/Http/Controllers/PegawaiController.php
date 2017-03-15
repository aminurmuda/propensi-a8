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
    
    public function lihatPengguna($kode_prodi) {
		$timAkreditasi = Pegawai::getTimAkreditasiByProdi($kode_prodi);
		// dd($timAkreditasi);
		return view('kelola', [
				'timAkreditasi' => $timAkreditasi
		]);
	}

	public function tambahPengguna($username){
		Pegawai::addTimAkreditasi($username);
		return 'tim akreditasi berhasil ditambahkan';
	}
}

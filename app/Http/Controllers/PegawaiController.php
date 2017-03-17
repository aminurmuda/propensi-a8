<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use DB;

class PegawaiController extends Controller
{
    public function _construct(){
        
    }

	/**
	 * Method deleteTimAkreditasi untuk menghilangkan akses pegawai yang sudah tidak menjadi tim akreditasi lagi
	 * 
	 * @param string $username username pegawai yang ingin dihapus aksesnya
	 * @return ....
	 */
    public function deleteTimAkreditasi($username){
    	// if ($request->session()->has('user')) {
    	Pegawai::deleteTimAkreditasi($username);
		return 'tim akreditasi berhasil dihapus';
		// } else {
    	// 	return view('landing');
    	// }
    }

	/**
	 * Method lihatPegawaiIsNotTimAkreditasi untuk menampilkan list semua pegawai yang bukan merupakan tim akreditasi
	 * 
	 * @param string $kode_fakultas kode fakultas dari pengguna yang sedang login
	 * @return view halaman daftar pegawai
	 */
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

	/**
	 * Method lihatPegawaiIsNotTimAkreditasiByUsername untuk mencari pegawai yang bukan merupakan tim akreditasi berdasarkan nama
	 * 
	 * @param string $username adalah username yang ingin dicari
	 * @return .....
	 */
    public function lihatPegawaiIsNotTimAkreditasiByUsername($username){
    	// if ($request->session()->has('user')) {
    	Pegawai::getPegawaiIsNotTimAkreditasiByUsername($username);
    	return 'terlihat berdasarkan username';
    	// } else {
    	// 	return view('landing');
    	// }

    }

	/**
	 * Method lihatPegawaiIsNotTimAkreditasiBy untuk mencari pegawai yang bukan merupakan tim akreditasi berdasarkan NIP
	 * 
	 * @param string $no_pegawai merupakan NIP yang ingin dicari
	 * @return .....
	 */
    public function lihatPegawaiIsNotTimAkreditasiBy($no_pegawai){
    	// if ($request->session()->has('user')) {
    	Pegawai::getPegawaiIsNotTimAkreditasiByNIP($no_pegawai);
    	return 'terlihat berdasarkan NIP';
    	    	// } else {
    	// 	return view('landing');
    	// }
    }

	/**
	 * Method lihatPengguna untuk menampilkan list semua tim akreditasi
	 * 
	 * @param string $kode_fakultas kode fakultas dari pengguna yang sedang login
	 * @param Request $request untuk session
	 * @return view halaman daftar tim akreditasi
	 */
    public function lihatPengguna($kode_fakultas, Request $request) {
    	// if ($request->session()->has('user')) {
	    	$timAkreditasi = Pegawai::getTimAkreditasiByFakultas($kode_fakultas);
			// dd($timAkreditasi);
			return view('kelola', [
					'timAkreditasi' => $timAkreditasi,
					'role' => $request->session()->get('role'),
					'kode_fakultas' => $kode_fakultas
			]);	
    	// } else {
    	// 	return view('landing');
    	// }
		
	}

	/**
	 * Method tambahPengguna untuk memberikan akses kepada suatu pegawai
	 * 
	 * @param string $username username pegawai yang ingin diberikan akses
	 * @return ......
	 */
	public function tambahPengguna($username) {
		Pegawai::addTimAkreditasi($username);
		return 'tim akreditasi berhasil ditambahkan';
	}

}

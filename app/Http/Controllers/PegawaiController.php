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
	 * Method tambahPengguna untuk memberikan akses kepada suatu pegawai
	 * 
	 * @param string $username username pegawai yang ingin diberikan akses
	 * @return ......
	 */
	public function tambahTimAkreditasi($username, Request $request) {
		Pegawai::addTimAkreditasi($username);
		return view('tambah-sukses', [
			'role' => $request->session()->get('role'),
            'user' => $request->session()->get('user'),        
            'username' => $username
		]);
	}

	/**
	 * Method deleteTimAkreditasi untuk menghilangkan akses pegawai yang sudah tidak menjadi tim akreditasi lagi
	 * 
	 * @param string $username username pegawai yang ingin dihapus aksesnya
	 * @return ....
	 */
    public function deleteTimAkreditasi($username, Request $request){
    	Pegawai::deleteTimAkreditasi($username);
		return view('hapus-sukses', [
			'role' => $request->session()->get('role'),
            'user' => $request->session()->get('user'),
            'username' => $username
		]);
    }

	/**
	 * Method lihatPegawaiIsNotTimAkreditasi untuk menampilkan list semua pegawai yang bukan merupakan tim akreditasi
	 * 
	 * @param string $kode_fakultas kode fakultas dari pengguna yang sedang login
	 * @return view halaman daftar pegawai
	 */
    public function lihatPegawaiIsNotTimAkreditasi($kode_fakultas, Request $request){
    	$pegawai = Pegawai::getAllPegawaiIsNotTimAkreditasi($kode_fakultas);
    	return view('tambahuser', [
            'pegawai' => $pegawai,
            'role' => $request->session()->get('role'),
            'kode_fakultas' => $kode_fakultas,
            'user' => $request->session()->get('user')
        ]);
    }

	/**
	 * Method lihatPegawaiIsNotTimAkreditasiByUsername untuk mencari pegawai yang bukan merupakan tim akreditasi berdasarkan nama
	 * 
	 * @param string $username adalah username yang ingin dicari
	 * @return .....
	 */
    public function lihatPegawaiIsNotTimAkreditasiByUsername($username){
    	Pegawai::getPegawaiIsNotTimAkreditasiByUsername($username);
    	return 'terlihat berdasarkan username';

    }

	/**
	 * Method lihatPegawaiIsNotTimAkreditasiBy untuk mencari pegawai yang bukan merupakan tim akreditasi berdasarkan NIP
	 * 
	 * @param string $no_pegawai merupakan NIP yang ingin dicari
	 * @return .....
	 */
    public function lihatPegawaiIsNotTimAkreditasiBy($no_pegawai){
    	Pegawai::getPegawaiIsNotTimAkreditasiByNIP($no_pegawai);
    	return 'terlihat berdasarkan NIP';
    }

	/**
	 * Method lihatPengguna untuk menampilkan list semua tim akreditasi
	 * 
	 * @param string $kode_fakultas kode fakultas dari pengguna yang sedang login
	 * @param Request $request untuk session
	 * @return view halaman daftar tim akreditasi
	 */
    public function lihatPengguna($kode_fakultas, Request $request) {

    	//validasi jika kode fakultas yang ingin diakses tidak sesuai dengan kode fakultas pengguna
    	$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
    	$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;
    	if ($kodeFakultasPengguna==$kode_fakultas) {
	    	$timAkreditasi = Pegawai::getTimAkreditasiByFakultas($kode_fakultas);
			return view('kelola', [
					'timAkreditasi' => $timAkreditasi,
					'role' => $request->session()->get('role'),
					'kode_fakultas' => $kode_fakultas,
					'user' => $request->session()->get('user')
			]);	    		
    	} 
    		return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $request->session()->get('role'),
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $request->session()->get('user')
			]);	    		
		
	}

	/**
	 * Method profilPengguna untuk melihat profil pengguna yang sedang login beserta rolenya
	 * 
	 * @param string $username username pegawai yang ingin diberikan akses
	 * @return ......
	 */
	public function profilPengguna($username, Request $request) {
		$pengguna = Pegawai::lihatProfilPengguna($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;
		if($username == $request->session()->get('user')){
			return view('profile', [
					'role' => $request->session()->get('role'),
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $username,
					'pengguna' =>$pengguna[0]
					]);
		}
			
			return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $request->session()->get('role'),
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $request->session()->get('user')
			]);	    
	}	

}

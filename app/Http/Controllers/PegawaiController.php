<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Pimpinan;
use DB;

class PegawaiController extends Controller
{
    public function _construct(){
        
    }

    /**
	 * Method tambahPengguna untuk memberikan akses kepada suatu pegawai
	 * 
	 * @param string $username username pegawai yang ingin diberikan akses
	 * @return view halaman notifikasi bahwa user telah ditambahkan sebagai tim akreditasi
	 */
	public function tambahTimAkreditasi($username, Request $request) {
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
    	$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;
    	if ($request->session()->get('role')=='Pimpinan Fakultas'){
			Pegawai::addTimAkreditasi($username);
			$pegawai = Pegawai::getPegawaiByUsername($username);
			$kodeFakultas = Pegawai::getFakultasPegawai($username);
			return view('tambah-sukses', [
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pegawai,      
	            'kode_fakultas' => $kodeFakultas,  
	            'username' => $username
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
	 * Method deleteTimAkreditasi untuk menghilangkan akses pegawai yang sudah tidak menjadi tim akreditasi lagi
	 * 
	 * @param string $username username pegawai yang ingin dihapus aksesnya
	 * @return view halaman notifikasi bahwa user telah dihapus dari tim akreditasi
	 */
    public function deleteTimAkreditasi($username, Request $request){
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
    	$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;
    	if ($request->session()->get('role')=='Pimpinan Fakultas'){    	
	    	Pegawai::deleteTimAkreditasi($username);
	    	$pegawai = Pegawai::getPegawaiByUsername($username);
	    	$kodeFakultas = Pegawai::getFakultasPegawai($username);
			return view('hapus-sukses', [
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'kode_fakultas' => $kodeFakultas,
	            'pegawai' => $pegawai,
	            'username' => $username
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
	 * Method lihatPegawaiIsNotTimAkreditasi untuk menampilkan list semua pegawai yang bukan merupakan tim akreditasi
	 * 
	 * @param string $kode_fakultas kode fakultas dari pengguna yang sedang login
	 * @return view halaman daftar pegawai
	 */
    public function lihatPegawaiIsNotTimAkreditasi($kode_fakultas, Request $request){
    	//validasi jika kode fakultas yang ingin diakses tidak sesuai dengan kode fakultas pengguna
    	$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
    	$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;
    	if ($request->session()->get('role')=='Pimpinan Fakultas'){
	    		if ($kodeFakultasPengguna==$kode_fakultas) {
			    	$pegawai = Pegawai::getAllPegawaiIsNotTimAkreditasi($kode_fakultas);
			    	return view('tambahuser', [
			            'pegawai' => $pegawai,
			            'role' => $request->session()->get('role'),
			            'kode_fakultas' => $kode_fakultas,
			            'user' => $request->session()->get('user')
			        ]);  		
    		} 
    	}
    	return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $request->session()->get('role'),
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $request->session()->get('user')
			]);	         
    }

	/**
	 * Method getCalonPimpinanByUsername untuk mencari pegawai yang bukan merupakan tim akreditasi berdasarkan username sebagai kandidat menjadi pimpinan
	 * 
	 * @param string $username adalah username yang ingin dicari
	 * @return .....
	 */
    public function getCalonPimpinanByUsername($username){
    	Pegawai::getPegawaiIsNotTimAkreditasiByUsername($username);
    	return 'terlihat berdasarkan username';

    }

	/**
	 * Method getCalonPimpinanByNIP untuk mencari pegawai yang bukan merupakan tim akreditasi berdasarkan NIP sebagai kandidat menjadi pimpinan
	 * 
	 * @param string $no_pegawai merupakan NIP yang ingin dicari
	 * @return .....
	 */
    public function getCalonPimpinanByNIP($no_pegawai){
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
    	if ($request->session()->get('role')=='Pimpinan Fakultas'){
	    		if ($kodeFakultasPengguna==$kode_fakultas) {
		    	$timAkreditasi = Pegawai::getTimAkreditasiByFakultas($kode_fakultas);
				return view('kelola', [
						'timAkreditasi' => $timAkreditasi,
						'role' => $request->session()->get('role'),
						'kode_fakultas' => $kode_fakultas,
						'user' => $request->session()->get('user')
				]);	    		
    		} 
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
	 * @return profil data dari pengguna yang sedang login
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
					'pengguna' =>$pengguna
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
	 * Method setUpPimpinan untuk menjadikan pegawai sebagai pimpinan
	 * 
	 * @param int $id_pimpinan, $valuePimpinan, dan $username pegawai yang ingin dijadikan pimpinan
	 * @return pimpinan berhasil ditambahkan ke dalam database
	 */

	public function setUpPimpinan($id_pimpinan, $valuePimpinan, $username) {
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;
		if ($request->session()->get('role')=='Admin') {
			Pegawai::setIsPimpinan($username);
			Pimpinan::setGeneralPimpinan($id_pimpinan, $valuePimpinan, $username);
			return "Pimpinan ditambahkan";
		}
		return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $request->session()->get('role'),
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $request->session()->get('user')
		]);	 
	}

	/**
	 * Method kelolaPimpinanPage untuk menampilkan halaman list dari pimpinan
	 * 
	 * @param String $username, username dari pengguna yang sedang login (admin)
	 * @return list pimpinan berhasil ditampilkan dalam halaman
	 */
	public function kelolaPimpinanPage($username, Request $request) {
		$pengguna = Pegawai::lihatProfilPengguna($username);
		// $listPimpinan=Pegawai::getPimpinanPegawai();
		$listPimpinan = Pegawai::lihatSemuaPimpinan();
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;
		if ($request->session()->get('role')=='Admin') {

			return view('kelolapimpinan', [
						'role' => $request->session()->get('role'),
						'kode_fakultas' => $kodeFakultasPengguna,
						'listPimpinan' => $listPimpinan,
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
	/**
	 * Method hapusPimpinan untuk menghapus pimpinan
	 * 
	 * @param string $username, $request
	 * @return pimpinan berhasil dihapus
	 */
	public function hapusPimpinan($username, Request $request) {
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$pegawai = Pegawai::getPegawaiByUsername($username);
		$kodeFakultas = Pegawai::getFakultasPegawai($username);
		Pegawai::hapusIsPimpinan($username);
		Pimpinan::hapusPimpinan($pimpinan->id_pimpinan);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;		
		if ($request->session()->get('role')=='Admin') {
			return view('hapus-pimpinan',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pegawai,      
	            'kode_fakultas' => $kodeFakultas,  
	            'username' => $username
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
	 * Method tambahPimpinan untuk menambah pimpinan
	 * 
	 * @param string $username, $valuePimpinan jenis pimpinan yang akan dipilih $request
	 * @return pimpinan berhasil ditambahkan
	 */
	public function tambahPimpinan($username, $valuePimpinan, Request $request) {
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		
		if($pimpinan == null) { //jika pegawai tidak ditemukan dalam database
			return view('error-username',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username
			]);
		}
		$kodeFakultas = Pegawai::getFakultasPegawai($username); //kode fakultas username yang sedang ingin ditambah
		Pegawai::setIsPimpinan($username);
		Pimpinan::addPimpinan($valuePimpinan, $username);
		Pegawai::updateIdPimpinanPegawai($username);	
		if ($request->session()->get('role')=='Admin') {		
			if($pimpinan->username != null && $valuePimpinan != 0) {
				return view('tambah-pimpinan',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultas,  
	            'username' => $username
				]);
			} 

		}
		return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $request->session()->get('role'),
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $request->session()->get('user')
		]);	
	}

}

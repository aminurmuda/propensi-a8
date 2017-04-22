<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Pimpinan;
use App\program_studi;
use App\fakultas;
use App\dosen;
use App\tendik;
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
    	$kodeFakultasPengguna= $QKodeFakultasPengguna[0]->kode_fakultas;
    	$role = $request->session()->get('role');
    	if ($role=='Pimpinan Fakultas'|| $role=='Admin'){
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
    	$role = $request->session()->get('role');
    	if ($role=='Pimpinan Fakultas'|| $role=='Admin'){   	
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
    	$role = $request->session()->get('role');
    	if ($role=='Pimpinan Fakultas'||$role=='Admin'){
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
    	$role = $request->session()->get('role');
    	if ($role=='Pimpinan Fakultas'||$role=='Admin'){
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

	public function pilihProdi(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$role=$request->session()->get('role');
			//untuk pimpinan univ, reviewer univ, admin
			if($role=='Pimpinan Universitas' || $role=='Reviewer Universitas' || $role=='Admin'){
				$prodi = program_studi::getAllProdi();
			} else {
				//untuk pimpinan fakultas
				$prodi = program_studi::getProdiByFakultas($kodeFakultasPengguna);				
			}

		
			return view('pilihprodi',[
				'role' => $role,
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'prodi' => $prodi,  
	            'username' => $username
			]);
	}	

	public function lihat3a4(Request $request) {

		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login

		$QKodeProdiPengguna = Pegawai::getProdiPegawai($request->session()->get('user'));		
		$kodeProdiPengguna=$QKodeProdiPengguna[0]->kode_prodi_pengajaran;	 //belum disesuain sama kode prodi tim akreditasi
		if ($request->get('selectProdi')){
			$selectedProdi = $request->get('selectProdi'); 	
		} else {
			$selectedProdi=$kodeProdiPengguna;
		}

		if ($request->get('tahun')){
			$tahun = $request->get('tahun'); 	
		} else {
			$tahun = date('Y');
		}

		//poin 4.3.1
		$standar4_3_1 = Dosen::getDosenTetapSesuai($selectedProdi);

		//poin 4.3.2
		$standar4_3_2 = Dosen::getDosenTetapTidakSesuai($selectedProdi);

		//poin 4.3.4
		$standar4_3_4 = Dosen::getDosenTetapPSAktivitas($selectedProdi,$tahun);
		//poin 4.3.5
		$standar4_3_5 = Dosen::getDosenTetapTidakPSAktivitas($selectedProdi,$tahun);
		// dd($standar4_3_4);
		//poin 4.4.1
		$standar4_4_1 = Dosen::getDosenTidakTetap($selectedProdi);

		//poin 4.4.2
		$standar4_4_2 = Dosen::getDosenTidakTetapAktivitas($selectedProdi,$tahun);

		//poin 4.5.1
		$standar4_5_1 = Dosen::getTenagaAhliDosen($selectedProdi,$tahun);

		//poin 4.5.2
		$standar4_5_2 = Dosen::getProgramDosen($selectedProdi,$tahun);

		//poin 4.5.3
		$standar4_5_3 = Dosen::getKegiatanDosen($selectedProdi,$tahun);

		//poin 4.5.4
		$standar4_5_4 = Dosen::getPrestasiDosen($selectedProdi,$tahun);

		//poin 4.5.5
		$standar4_5_5 = Dosen::getOrganisasiDosen($selectedProdi,$tahun);
		// dd($standar4_5_5);

		//poin 4.6.1
		$standar4_6_1_a = tendik::getPendidikanA($selectedProdi);
		// dd($standar4_6_1_pustakawan);
		//hitung jumlah d1, d2,d3,d4,s1,s2,s3
		$arrA = array(0,0,0,0,0,0,0,0,'');
		foreach ($standar4_6_1_a as $standar4_6_1_a) {
			$riwayat_pendidikan = $standar4_6_1_a -> riwayat_pendidikan;
			$nama = $standar4_6_1_a -> nama;
			$arrA[8] = $standar4_6_1_a -> unit_kerja;
			if ($riwayat_pendidikan=='D1') {
				$arrA[0]+=1;
			} else if ($riwayat_pendidikan=='D1') {
				$arrA[1]+=1;
			} else if ($riwayat_pendidikan=='D2') {
				$arrA[2]+=1;
			} else if ($riwayat_pendidikan=='D3') {
				$arrA[3]+=1;
			} else if ($riwayat_pendidikan=='D4') {
				$arrA[4]+=1;
			} else if ($riwayat_pendidikan=='S1') {
				$arrA[5]+=1;
			} else if ($riwayat_pendidikan=='S2') {
				$arrA[6]+=1;
			} else {
				$arrA[7]+=1;
			}
		}

		$standar4_6_1_b = tendik::getPendidikanB($selectedProdi);
		// dd($standar4_6_1_pustakawan);
		//hitung jumlah d1, d2,d3,d4,s1,s2,s3
		$arrB = array(0,0,0,0,0,0,0,0,'');
		foreach ($standar4_6_1_b as $standar4_6_1_b) {
			$riwayat_pendidikan = $standar4_6_1_b -> riwayat_pendidikan;
			$nama = $standar4_6_1_b -> nama;
			$arrB[8] = $standar4_6_1_b -> unit_kerja;
			if ($riwayat_pendidikan=='D1') {
				$arrB[0]+=1;
			} else if ($riwayat_pendidikan=='D1') {
				$arrB[1]+=1;
			} else if ($riwayat_pendidikan=='D2') {
				$arrB[2]+=1;
			} else if ($riwayat_pendidikan=='D3') {
				$arrB[3]+=1;
			} else if ($riwayat_pendidikan=='D4') {
				$arrB[4]+=1;
			} else if ($riwayat_pendidikan=='S1') {
				$arrB[5]+=1;
			} else if ($riwayat_pendidikan=='S2') {
				$arrB[6]+=1;
			} else {
				$arrB[7]+=1;
			}
		}	


		$standar4_6_1_c = tendik::getPendidikanC($selectedProdi);
		// dd($standar4_6_1_pustakawan);
		//hitung jumlah d1, d2,d3,d4,s1,s2,s3
		$arrC = array(0,0,0,0,0,0,0,0,'');
		foreach ($standar4_6_1_c as $standar4_6_1_c) {
			$riwayat_pendidikan = $standar4_6_1_c -> riwayat_pendidikan;
			$nama = $standar4_6_1_c -> nama;
			$arrC[8] = $standar4_6_1_c -> unit_kerja;
			if ($riwayat_pendidikan=='D1') {
				$arrC[0]+=1;
			} else if ($riwayat_pendidikan=='D1') {
				$arrC[1]+=1;
			} else if ($riwayat_pendidikan=='D2') {
				$arrC[2]+=1;
			} else if ($riwayat_pendidikan=='D3') {
				$arrC[3]+=1;
			} else if ($riwayat_pendidikan=='D4') {
				$arrC[4]+=1;
			} else if ($riwayat_pendidikan=='S1') {
				$arrC[5]+=1;
			} else if ($riwayat_pendidikan=='S2') {
				$arrC[6]+=1;
			} else {
				$arrC[7]+=1;
			}
		}	
		// print_r($arrC);
		$arrD = array($arrA[0]+$arrB[0]+$arrC[0],$arrA[1]+$arrB[1]+$arrC[1],$arrA[2]+$arrB[2]+$arrC[2],$arrA[3]+$arrB[3]+$arrC[3],$arrA[4]+$arrB[4]+$arrC[4],$arrA[5]+$arrB[5]+$arrC[5],$arrA[6]+$arrB[6]+$arrC[6],$arrA[7]+$arrB[7]+$arrC[7],'');

			return view('view3a4',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            'standar4_3_1' => $standar4_3_1,
	            'standar4_3_2' => $standar4_3_2,
	            'standar4_3_4' => $standar4_3_4,
	            'standar4_3_5' => $standar4_3_5,
	            'standar4_4_1' => $standar4_4_1,
	            'standar4_4_2' => $standar4_4_2,
	            'standar4_5_1' => $standar4_5_1,
	            'standar4_5_2' => $standar4_5_2,
	            'standar4_5_3' => $standar4_5_3,
	            'standar4_5_4' => $standar4_5_4,
	            'standar4_5_5' => $standar4_5_5,
	            'arrA' => $arrA,
	            'arrB' => $arrB,
	            'arrC' => $arrC,
	            'arrD' => $arrD
			]);
	}		

	public function pilihFakultas(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;
		$fakultas = fakultas::getAllFakultas();
		return view('pilihfakultas',[
			'role' => $request->session()->get('role'),
            'user' => $request->session()->get('user'),
            'pegawai' => $pimpinan,      
            'kode_fakultas' => $kodeFakultasPengguna,  
            'fakultas' => $fakultas,  
            'username' => $username
		]);
	}

	public function profilUpdateTimAkreditasi($username, Request $request) {
		$pegawai = Pegawai::lihatProfilPengguna($username);
		$QKodeFakultasPegawai = Pegawai::getFakultasPegawai($username);
		$kodeFakultasPegawai=$QKodeFakultasPegawai[0]->kode_fakultas;
		$prodi = program_studi::getProdiByFakultas($kodeFakultasPegawai);
		if($username != null){
			return view('updatetimakreditasi', [
					'role' => $request->session()->get('role'),
					'kode_fakultas' => $kodeFakultasPegawai,
					'user' => $username,
					'pegawai' =>$pegawai,
					'prodi' => $prodi
			]);
		}
			
			return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $request->session()->get('user')
			]);	 
	}


	public function lihat3a2(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
			return view('view3a2',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username
			]);
	}

	public function lihat3b2(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
			return view('view3b2',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username
			]);
	}

	public function edit3a2(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
			return view('update3a2',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username
			]);
	}

	public function edit3b2(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
			return view('update3b2',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username
			]);
	}

	public function edit3a4(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
			return view('update3a4',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username
			]);
	}

	public function edit3a7(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
			return view('update3a7',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username
			]);
	}

	public function edit3b4(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
			return view('update3b4',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username
			]);
	}

	public function lihat3b4(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
			return view('view3b4',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username
			]);
	}

	public function lihat3a7(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
			return view('view3a7',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username
			]);
	}

	public function lihat3b7(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
			return view('view3b7',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username
			]);
	}

	public function edit3b7(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
			return view('update3b7',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username
			]);
	}

}

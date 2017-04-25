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
		
		$kode_prodi = $request->input('selectProdi');
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
    	$kodeFakultasPengguna= $QKodeFakultasPengguna[0]->kode_fakultas;

    	$role = $request->session()->get('role');

    	if ($role=='Pimpinan Fakultas'|| $role=='Admin'){
			Pegawai::addTimAkreditasi($username, $kode_prodi);
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
    	if ($role=='Pimpinan Fakultas'){
	    		if ($kodeFakultasPengguna==$kode_fakultas) {
			    	$pegawai = Pegawai::getAllPegawaiIsNotTimAkreditasi($kode_fakultas);
			    	return view('tambahuser', [
			            'pegawai' => $pegawai,
			            'role' => $request->session()->get('role'),
			            'kode_fakultas' => $kode_fakultas,
			            'user' => $request->session()->get('user')
			        ]);  		
    		} 
    	} elseif ($role=='Admin') {
    		$pegawai = Pegawai::getAllPegawaiIsNotTimAkreditasi($kode_fakultas);
	    	return view('tambahuser', [
	            'pegawai' => $pegawai,
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
    	if ($role=='Pimpinan Fakultas'){
    		if ($kodeFakultasPengguna==$kode_fakultas) {
		    	$timAkreditasi = Pegawai::getTimAkreditasiByFakultas($kode_fakultas);
				return view('kelola', [
						'timAkreditasi' => $timAkreditasi,
						'role' => $request->session()->get('role'),
						'kode_fakultas' => $kode_fakultas,
						'user' => $request->session()->get('user')
				]);	    		
    		}
    	} elseif ($role=='Admin') {
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
			

			if($role=='Tim Akreditasi' || $role=='Reviewer Prodi') {
				$QKodeProdiPengguna = Pegawai::getProdiPegawai($request->session()->get('user'));		
				$kodeProdiPengguna=$QKodeProdiPengguna[0]->kode_prodi_pengajaran;	 //belum disesuain sama kode tim akreditasinya
				return redirect('3a/standar4/'.$kodeProdiPengguna);
			}
			//disini untuk role yang pimpinan, bpma, upmaf, admin, reviewer univ harus pilih prodi dulu baru bisa lihat borangnya
			if($role=='Pimpinan Universitas' || $role=='BPMA' || $role=='Admin'|| $role=='Reviewer Universitas'){
				$prodi = program_studi::getAllProdi();
			} else {
				
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

	public function lihat3a4(Request $request, $kodeProdi) {
		// wajib ada
		$role= $request->session()->get('role');
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$QKodeProdiPengguna = Pegawai::getProdiPegawai($request->session()->get('user'));		
		$kodeProdiPengguna=$QKodeProdiPengguna[0]->kode_prodi_pengajaran;	 //belum disesuain sama kode prodi tim akreditasi
		// end of wajib ada
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

		//poin 4.1,4.2,4.6.1
		$standar4_json = Borang::getBorang(4,$selectedProdi,$tahun);
		$isi = $standar4_json[0]->isi;
		$standar4 = json_decode(stripslashes($isi),true);
		// dd($standar4);

		//poin 4.3.1
		$standar4_3_1 = Dosen::getDosenTetapSesuai($selectedProdi);
		$standar4_3_1_occurences = array();
		foreach($standar4_3_1 as $standar4_3_1_count){
		  $nama_pegawai = $standar4_3_1_count-> namaPegawai;

		  if(!isset($standar4_3_1_occurences[$nama_pegawai])){
		    $standar4_3_1_occurences[$nama_pegawai] = 0;
		  }

		  $standar4_3_1_occurences[$nama_pegawai]++;
		}

		//poin 4.3.2
		$standar4_3_2 = Dosen::getDosenTetapTidakSesuai($selectedProdi);
		$standar4_3_2_occurences = array();
		foreach($standar4_3_2 as $standar4_3_2_count){
		  $nama_pegawai = $standar4_3_2_count-> namaPegawai;

		  if(!isset($standar4_3_2_occurences[$nama_pegawai])){
		    $standar4_3_2_occurences[$nama_pegawai] = 0;
		  }

		  $standar4_3_2_occurences[$nama_pegawai]++;
		}

		//poin 4.3.3
		$standar4_3_3 = Dosen::getDosenSKSAktivitasTetapSesuai($selectedProdi,$tahun);

		//poin 4.3.4
		$standar4_3_4 = Dosen::getDosenTetapPSAktivitas($selectedProdi,$tahun);
		//poin 4.3.5
		$standar4_3_5 = Dosen::getDosenTetapTidakPSAktivitas($selectedProdi,$tahun);
		// dd($standar4_3_4);
		//poin 4.4.1
		$standar4_4_1 = Dosen::getDosenTidakTetap($selectedProdi);
		$standar4_4_1_occurences = array();
		foreach($standar4_4_1 as $standar4_4_1_count){
		  $nama_pegawai = $standar4_4_1_count-> namaPegawai;

		  if(!isset($standar4_4_1_occurences[$nama_pegawai])){
		    $standar4_4_1_occurences[$nama_pegawai] = 0;
		  }

		  $standar4_4_1_occurences[$nama_pegawai]++;
		}
		//poin 4.4.2
		$standar4_4_2 = Dosen::getDosenTidakTetapAktivitas($selectedProdi,$tahun);

		//poin 4.5.1
		$standar4_5_1 = Dosen::getTenagaAhliDosen($selectedProdi,$tahun);
		// dd($standar4_5_1);
		//poin 4.5.2
		$standar4_5_2 = Dosen::getProgramDosen($selectedProdi,$tahun);

		//poin 4.5.3
		$standar4_5_3 = Dosen::getKegiatanDosen($selectedProdi,$tahun);

		//poin 4.5.4
		$standar4_5_4 = Dosen::getPrestasiDosen($selectedProdi,$tahun);

		//poin 4.5.5
		$standar4_5_5 = Dosen::getOrganisasiDosen($selectedProdi,$tahun);

		//poin 4.6.1
		$standar4_6_1_a = tendik::getPendidikanA($selectedProdi);

		//hitung jumlah d1, d2,d3,d4,s1,s2,s3,SMA
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

		$arrD = array($arrA[0]+$arrB[0]+$arrC[0],$arrA[1]+$arrB[1]+$arrC[1],$arrA[2]+$arrB[2]+$arrC[2],$arrA[3]+$arrB[3]+$arrC[3],$arrA[4]+$arrB[4]+$arrC[4],$arrA[5]+$arrB[5]+$arrC[5],$arrA[6]+$arrB[6]+$arrC[6],$arrA[7]+$arrB[7]+$arrC[7],'');

			return view('view3a4',[
				'role' => $role,
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            'tahun' => $tahun,
	            'prodiBorang' => $prodiBorang,
	            'standar4' => $standar4,
	            'standar4_3_1' => $standar4_3_1,
	            'standar4_3_1_occurences' => $standar4_3_1_occurences,
	            'standar4_3_2' => $standar4_3_2,
	            'standar4_3_2_occurences' => $standar4_3_2_occurences,
	            'standar4_3_3' => $standar4_3_3,
	            'standar4_3_4' => $standar4_3_4,
	            'standar4_3_5' => $standar4_3_5,
	            'standar4_4_1' => $standar4_4_1,
	            'standar4_4_1_occurences' => $standar4_4_1_occurences,
	            'standar4_4_2' => $standar4_4_2,
	            'standar4_5_1' => $standar4_5_1,
	            'standar4_5_2' => $standar4_5_2,
	            'standar4_5_3' => $standar4_5_3,
	            'standar4_5_4' => $standar4_5_4,
	            'standar4_5_5' => $standar4_5_5,
	            'arrA' => $arrA,
	            'arrB' => $arrB,
	            'arrC' => $arrC,
	            'arrD' => $arrD,
	            'kodeProdi' => $selectedProdi
			]);
	}

	public function pilihFakultasGeneral(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$role=$request->session()->get('role');
			//untuk pimpinan univ, reviewer univ, admin
			if($role=='Pimpinan Universitas' || $role=='Reviewer Universitas' || $role=='Admin'){
				$fakultas = fakultas::getAllFakultas();
			} 
			return view('pilihfakultas',[
				'role' => $role,
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'fakultas' => $fakultas,  
	            'username' => $username
			]);
	}		

	public function pilihFakultasTambah(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;
		$fakultas = fakultas::getAllFakultas();

		return view('pilihfakultastambah',[
			'role' => $request->session()->get('role'),
            'user' => $request->session()->get('user'),
            'pegawai' => $pimpinan,      
            'kode_fakultas' => $kodeFakultasPengguna,  
            'fakultas' => $fakultas,  
            'username' => $username
		]);
	}

	public function pilihfakultaskelola(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;
		$fakultas = fakultas::getAllFakultas();
		return view('pilihfakultaskelola',[
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
		$prodiTimAkreditasi = Pegawai::lihatProdiTimAkreditasi($username);

		if($username != null){
			return view('updatetimakreditasi', [
					'role' => $request->session()->get('role'),
					'kode_fakultas' => $kodeFakultasPegawai,
					'user' => $username,
					'pegawai' =>$pegawai[0],
					'prodi' => $prodi,
					'prodiTimAkreditasi' => $prodiTimAkreditasi
			]);
		}
			
			return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $request->session()->get('user')
			]);	 
	}


	public function lihat3a2(Request $request, $kodeProdi) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$standar2_json = Borang::getBorang('3a',2,$kodeProdi,2017);
		$isi = $standar2_json[0]->isi;
		$standar2 = json_decode(stripslashes($isi),true);
			return view('view3a2',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            'standar2' => $standar2,
	            'kodeProdi' => $kodeProdi
			]);
	}

	public function lihat3b2(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login

		
		
		

		if ($request->get('tahun')){
			$tahun = $request->get('tahun'); 	
		} else {
			$tahun = date('Y');
		}

		$standar2_json = Borang::getBorang("3b",2,$kodeFakultasPengguna,$tahun);
		$isi = $standar2_json[0]->isi;
		$standar2 = json_decode(stripslashes($isi),true);
		// dd($isi);

			return view('view3b2',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            'standar2' => $standar2,
	 
	            'tahun' => $tahun
			]);

		
	}

	public function edit3a2(Request $request,$kodeStandar,$kodeProdi) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$kodeStandarStr= str_replace("-",".",$kodeStandar);
		$nomorStandar = explode("-", $kodeStandar)[0];
		
		$standar2_json = Borang::getBorang('3a', $nomorStandar,$kodeProdi,2017);
		$isi = $standar2_json[0]->isi;
		$standar2 = json_decode(stripslashes($isi),true);

			return view('update3a2-new',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            'standar2' => $standar2,
	            'kodeProdi' => $kodeProdi,
	            'kodeStandar' => $kodeStandar,
	            'kodeStandarStr' => $kodeStandarStr
			]);
	}


	public function edit3a25(Request $request,$kodeStandar,$kodeProdi, $dari, $jenisIsian) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$kodeStandarStr= str_replace("-",".",$kodeStandar);
		$nomorStandar = explode("-", $kodeStandar)[0];
		
		$standar2_json = Borang::getBorang('3a', $nomorStandar,$kodeProdi,2017);
		$isi = $standar2_json[0]->isi;
		$standar2 = json_decode(stripslashes($isi),true);
		
			dd($standar2['standar2'][$kodeStandarStr]['isian'][$dari][$jenisIsian]);
			return view('update3a25-new',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            'standar2' => $standar2,
	            'kodeProdi' => $kodeProdi,
	            'kodeStandar' => $kodeStandar,
	            'kodeStandarStr' => $kodeStandarStr,
	            '$dari' => $dari,
	            'jenisIsian' => $jenisIsian
			]);
	}


	public function edit3b2(Request $request,$kodeStandar,$kodeProdi) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login

		//yang boleh mengakses halaman ini adalah tim akreditasi dan admin
		$role=$request->session()->get('role');
		if($role!='Tim Akreditasi' && $role!='Admin') {
			return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $role,
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $username
			]);				
		}

		$kodeStandarStr= str_replace("-",".",$kodeStandar);
		if ($request->get('tahun')){
			$tahun = $request->get('tahun'); 	
		} else {
			$tahun = date('Y');
		}
		
		
		$standar2_json = Borang::getBorang(2,$kodeProdi,$tahun);
		$isi = $standar2_json[0]->isi;
		$standar2 = json_decode(stripslashes($isi),true);

			return view('update3b2-new',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            'kodeProdi' => $kodeProdi,
	            'kodeStandar' => $kodeStandar,
	            'standar2' => $standar2,
	            'kodeStandarStr' => $kodeStandarStr
			]);
	}

	public function edit3a4(Request $request,$kodeStandar,$kodeProdi) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		
		//yang boleh mengakses halaman ini adalah tim akreditasi dan admin
		$role=$request->session()->get('role');
		if($role!='Tim Akreditasi' && $role!='Admin') {
			return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $role,
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $username
			]);				
		}

		$kodeStandarStr= str_replace("-",".",$kodeStandar);
		if ($request->get('tahun')){
			$tahun = $request->get('tahun'); 	
		} else {
			$tahun = date('Y');
		}

		//poin 4.1
		$standar4_json = Borang::getBorang(4,$kodeProdi,$tahun);
		$isi = $standar4_json[0]->isi;
		$standar4 = json_decode(stripslashes($isi),true);

			return view('update3a4-new',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            'kodeProdi' => $kodeProdi,
	            'kodeStandar' => $kodeStandar,
	            'standar4' => $standar4,
	            'kodeStandarStr' => $kodeStandarStr
			]);
	}

	public function edit3a7(Request $request,$kodeStandar,$kodeProdi) {

		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		
		//yang boleh mengakses halaman ini adalah tim akreditasi dan admin
		$role=$request->session()->get('role');
		if($role!='Tim Akreditasi' && $role!='Admin') {
			return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $role,
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $username
			]);				
		}

		$kodeStandarStr= str_replace("-",".",$kodeStandar);
		if ($request->get('tahun')){
			$tahun = $request->get('tahun'); 	
		} else {
			$tahun = date('Y');
		}


		//poin 4.1
		$standar7_json = Borang::getBorang('3a',7,$kodeProdi,$tahun);
		$isi = $standar7_json[0]->isi;
		$standar7 = json_decode(stripslashes($isi),true);
		// dd($standar7['standar7']['7.1']);
			return view('update3a7-new',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            'kodeProdi' => $kodeProdi,
	            'kodeStandar' => $kodeStandar,
	            'standar7' => $standar7,
	            'kodeStandarStr' => $kodeStandarStr
			]);

	}


	public function edit3b4(Request $request,$kodeStandar,$kodeFakultas) {

		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login

		
		//yang boleh mengakses halaman ini adalah tim akreditasi dan admin
		$role=$request->session()->get('role');
		if($role!='Tim Akreditasi' && $role!='Admin') {
			return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $role,
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $username
			]);				
		}

		$kodeStandarStr= str_replace("-",".",$kodeStandar);
		if ($request->get('tahun')){
			$tahun = $request->get('tahun'); 	
		} else {
			$tahun = date('Y');
		}

		//poin 4.1
		$standar4_json = Borang::getBorang('3b',4,$kodeFakultas,$tahun);
		$isi = $standar4_json[0]->isi;
		$standar4 = json_decode(stripslashes($isi),true);
		// dd($standar4);

			return view('update3b4-new',[

				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  

	            'username' => $username,
	            'kodeFakultas' => $kodeFakultas,
	            'kodeStandar' => $kodeStandar,
	            'standar4' => $standar4,
	            'kodeStandarStr' => $kodeStandarStr

			]);
	}

	public function lihat3b4(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$listProdi;
		$totalFakultas = 0;

		if ($request->get('tahun')){
			$tahun = $request->get('tahun'); 	
		} else {
			$tahun = date('Y');
		}
		$standar4_json = Borang::getBorang('3b',4,$kodeFakultasPengguna,$tahun);
		$isi = $standar4_json[0]->isi;
		$standar4 = json_decode(stripslashes($isi),true);

		if ($request->get('selectFakultasGeneral')){
			$selectedFakultas = $request->get('selectFakultasGeneral');
			$listProdi = program_studi::getProdiByFakultas($selectedFakultas);
			$jumlahProdi = count($listProdi); //menghitung jumlah prodi
		} else {
			$selectedFakultas = $kodeFakultasPengguna;
			$listProdi = program_studi::getProdiByFakultas($selectedFakultas);
			$jumlahProdi = count($listProdi); //menghtiung jumlah prodi
		}
		
		$arr = [];
		

		foreach ($listProdi as $l)
		{
			$kode_prodi = $l->kode_prodi;
			$asistenAhli = count(dosen::getDosenTetapSesuaiAsistenAhli($kode_prodi));
			$lektor = count(dosen::getDosenTetapSesuaiLektor($kode_prodi));
			$lektorKepala = count(dosen::getDosenTetapSesuaiLektorKepala($kode_prodi));
			$guruBesar = count(dosen::getDosenTetapSesuaiGuruBesarProfesor($kode_prodi));
			$total = $asistenAhli+$lektor+$lektorKepala+$guruBesar;
			$arr[$l->nama_prodi]['asistenAhli'] = $asistenAhli;
			$arr[$l->nama_prodi]['lektor'] = $lektor;
			$arr[$l->nama_prodi]['lektorKepala'] = $lektorKepala;
			$arr[$l->nama_prodi]['guruBesar'] = $guruBesar;
			$arr[$l->nama_prodi]['total'] = $total;
			$totalFakultas += $total;
		}



		//poin 4.2
		$standar4_2_a = tendik::getPendidikanD($selectedFakultas);
		
		//hitung jumlah d1, d2,d3,d4,s1,s2,s3
		$arrA = array(0,0,0,0,0,0,0,0,'');
		foreach ($standar4_2_a as $standar4_2_a) {
			$riwayat_pendidikan = $standar4_2_a -> riwayat_pendidikan;
			$nama = $standar4_2_a -> nama;
			$arrA[8] = $standar4_2_a -> unit_kerja;
			if ($riwayat_pendidikan=='D1') {
				$arrA[0]+=1;
			} else if ($riwayat_pendidikan=='D2') {
				$arrA[1]+=1;
			} else if ($riwayat_pendidikan=='D3') {
				$arrA[2]+=1;
			} else if ($riwayat_pendidikan=='D4') {
				$arrA[3]+=1;
			} else if ($riwayat_pendidikan=='S1') {
				$arrA[4]+=1;
			} else if ($riwayat_pendidikan=='S2') {
				$arrA[5]+=1;
			} else if ($riwayat_pendidikan=='S3') {
				$arrA[6]+=1;
			} else {
				$arrA[7]+=1;
			}
		}

		$standar4_2_b = tendik::getPendidikanE($selectedFakultas);
		
		//hitung jumlah d1, d2,d3,d4,s1,s2,s3
		$arrB = array(0,0,0,0,0,0,0,0,'');
		foreach ($standar4_2_b as $standar4_2_b) {
			$riwayat_pendidikan = $standar4_2_b -> riwayat_pendidikan;
			$nama = $standar4_2_b -> nama;
			$arrB[8] = $standar4_2_b -> unit_kerja;
			if ($riwayat_pendidikan=='D1') {
				$arrB[0]+=1;
			} else if ($riwayat_pendidikan=='D2') {
				$arrB[1]+=1;
			} else if ($riwayat_pendidikan=='D3') {
				$arrB[2]+=1;
			} else if ($riwayat_pendidikan=='D4') {
				$arrB[3]+=1;
			} else if ($riwayat_pendidikan=='S1') {
				$arrB[4]+=1;
			} else if ($riwayat_pendidikan=='S2') {
				$arrB[5]+=1;
			} else if ($riwayat_pendidikan=='S3') {
				$arrB[6]+=1;
			} else {
				$arrB[7]+=1;
			}
		}	


		$standar4_2_c = tendik::getPendidikanF($selectedFakultas);
		
		//hitung jumlah d1, d2,d3,d4,s1,s2,s3
		$arrC = array(0,0,0,0,0,0,0,0,'');
		foreach ($standar4_2_c as $standar4_2_c) {
			$riwayat_pendidikan = $standar4_2_c -> riwayat_pendidikan;
			$nama = $standar4_2_c -> nama;
			$arrC[8] = $standar4_2_c -> unit_kerja;
			if ($riwayat_pendidikan=='D1') {
				$arrC[0]+=1;
			} else if ($riwayat_pendidikan=='D2') {
				$arrC[1]+=1;
			} else if ($riwayat_pendidikan=='D3') {
				$arrC[2]+=1;
			} else if ($riwayat_pendidikan=='D4') {
				$arrC[3]+=1;
			} else if ($riwayat_pendidikan=='S1') {
				$arrC[4]+=1;
			} else if ($riwayat_pendidikan=='S2') {
				$arrC[5]+=1;
			} else if ($riwayat_pendidikan=='S3') {
				$arrC[6]+=1;
			} else {
				$arrC[7]+=1;
			}
		}

		// print_r($arrC);
		$arrD = array($arrA[0]+$arrB[0]+$arrC[0],$arrA[1]+$arrB[1]+$arrC[1],$arrA[2]+$arrB[2]+$arrC[2],$arrA[3]+$arrB[3]+$arrC[3],$arrA[4]+$arrB[4]+$arrC[4],$arrA[5]+$arrB[5]+$arrC[5],$arrA[6]+$arrB[6]+$arrC[6],$arrA[7]+$arrB[7]+$arrC[7],'');

			return view('view3b4',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            'listProdi' => $listProdi,
	            'arrA' => $arrA,
	            'arrB' => $arrB,
	            'arrC' => $arrC,
	            'arrD' => $arrD,
	            'kodeFakultasSelected' => $selectedFakultas,
	            'arr' => $arr,
	            'jumlahProdi' => $jumlahProdi,

	            'totalFakultas' => $totalFakultas,
	            'totalPendidikanFakultas' => $totalPendidikanFakultas,
	            'standar4' => $standar4

			]);

	}

	public function lihat3a7(Request $request, $kode_prodi) {
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

		$standar7_json = Borang::getBorang('3a',7,$kodeFakultasPengguna,$tahun);
		$isi = $standar7_json[0]->isi;
		$standar7 = json_decode(stripslashes($isi),true);

		$standar7_1_1_a = danaProyek::getDanaProyekBiayaSendiri($kode_prodi,$tahun);
		$arrA = array(0,0,0);
		foreach ($standar7_1_1_a as $standar7_1_1_a ) {
			$tahun_min = $standar7_1_1_a->tanggal_selesai;
			if($tahun_min==($tahun-2)){
				$arrA[0]=$standar7_1_1_a->dana_count;
			}
			elseif ($tahun_min==($tahun-1)) {
				$arrA[1]=$standar7_1_1_a->dana_count;
			}
			elseif ($tahun_min==$tahun) {
				$arrA[2]=$standar7_1_1_a->dana_count;
			}

		}
		$standar7_1_1_b = danaProyek::getDanaProyekPT($kode_prodi,$tahun);
		$arrB = array(0,0,0);
		foreach ($standar7_1_1_b as $standar7_1_1_b ) {
			$tahun_min = $standar7_1_1_b->tanggal_selesai;
			if($tahun_min==($tahun-2)){
				$arrB[0]=$standar7_1_1_b->dana_count;
			}
			elseif ($tahun_min==($tahun-1)) {
				$arrB[1]=$standar7_1_1_b->dana_count;
			}
			elseif ($tahun_min==$tahun) {
				$arrB[2]=$standar7_1_1_b->dana_count;
			}

		}
		$standar7_1_1_c = danaProyek::getProyekDepdiknasDalamNegeri($kode_prodi,$tahun);
		$arrC = array(0,0,0);
		foreach ($standar7_1_1_c as $standar7_1_1_c ) {
			$tahun_min = $standar7_1_1_c->tanggal_selesai;
			if($tahun_min==($tahun-2)){
				$arrC[0]=$standar7_1_1_c->dana_count;
			}
			elseif ($tahun_min==($tahun-1)) {
				$arrC[1]=$standar7_1_1_c->dana_count;
			}
			elseif ($tahun_min==$tahun) {
				$arrC[2]=$standar7_1_1_c->dana_count;
			}

		}
		$standar7_1_1_d = danaProyek::getDanaProyekInstitusiDalamNegeri($kode_prodi,$tahun);
		$arrD = array(0,0,0);
		foreach ($standar7_1_1_d as $standar7_1_1_d ) {
			$tahun_min = $standar7_1_1_d->tanggal_selesai;
			if($tahun_min==($tahun-2)){
				$arrD[0]=$standar7_1_1_d->dana_count;
			}
			elseif ($tahun_min==($tahun-1)) {
				$arrD[1]=$standar7_1_1_d->dana_count;
			}
			elseif ($tahun_min==$tahun) {
				$arrD[2]=$standar7_1_1_d->dana_count;
			}

		}
		$standar7_1_1_e = danaProyek::getDanaProyekInstitusiLuarNegeri($kode_prodi,$tahun);
		$arrE = array(0,0,0);
		foreach ($standar7_1_1_e as $standar7_1_1_e ) {
			$tahun_min = $standar7_1_1_e->tanggal_selesai;
			if($tahun_min==($tahun-2)){
				$arrE[0]=$standar7_1_1_e->dana_count;
			}
			elseif ($tahun_min==($tahun-1)) {
				$arrE[1]=$standar7_1_1_e->dana_count;
			}
			elseif ($tahun_min==$tahun) {
				$arrE[2]=$standar7_1_1_e->dana_count;
			}

		}
		$standar7_1_3 = Proyek::getHasilPublikasiDosen($kode_prodi, $tahun);
		$standar7_2_3 = Proyek::getKaryaHAKI($kode_prodi, $tahun);
		$standar7_3_1 = kerja_sama::getKerjaSamaDalamNegeri($kode_prodi, $tahun);
		$standar7_3_2 = kerja_sama::getKerjaSamaLuarNegeri($kode_prodi, $tahun);

		$standar7_2_1_a = danaPengmas::getDanaBiayaSendiri($kode_prodi,$tahun);
		//array biaya sendiri
		$arr1 = array(0,0,0); //ts-2,ts-1,ts
		foreach ($standar7_2_1_a as $standar7_2_1_a ) {
			$tahun_min = $standar7_2_1_a->tahun;
			if($tahun_min==($tahun-2)){
				$arr1[0]=$standar7_2_1_a->dana_count;
			}
			elseif ($tahun_min==($tahun-1)) {
				$arr1[1]=$standar7_2_1_a->dana_count;
			}
			elseif ($tahun_min==$tahun) {
				$arr1[2]=$standar7_2_1_a->dana_count;
			}

		}
		$standar7_2_1_b = danaPengmas::getDanaPT($kode_prodi,$tahun);
		//array biaya dana PT
		$arr2 = array(0,0,0); //ts-2,ts-1,ts
		foreach ($standar7_2_1_b as $standar7_2_1_b ) {
			$tahun_min = $standar7_2_1_b->tahun;
			if($tahun_min==($tahun-2)){
				$arr2[0]=$standar7_2_1_b->dana_count;
			}
			elseif ($tahun_min==($tahun-1)) {
				$arr2[1]=$standar7_2_1_b->dana_count;
			}
			elseif ($tahun_min==$tahun) {
				$arr2[2]=$standar7_2_1_b->dana_count;
			}

		}
		$standar7_2_1_c = danaPengmas::getDanaDepdiknasDalamNegeri($kode_prodi,$tahun);
		//array biaya depdiknas
		$arr3 = array(0,0,0); //ts-2,ts-1,ts
		foreach ($standar7_2_1_c as $standar7_2_1_c ) {
			$tahun_min = $standar7_2_1_c->tahun;
			if($tahun_min==($tahun-2)){
				$arr3[0]=$standar7_2_1_c->dana_count;
			}
			elseif ($tahun_min==($tahun-1)) {
				$arr3[1]=$standar7_2_1_c->dana_count;
			}
			elseif ($tahun_min==$tahun) {
				$arr3[2]=$standar7_2_1_c->dana_count;
			}

		}
		$standar7_2_1_d = danaPengmas::getDanaInstitusiDalamNegeri($kode_prodi,$tahun);
		//array biaya institusi dalam negeri
		$arr4 = array(0,0,0); //ts-2,ts-1,ts
		foreach ($standar7_2_1_d as $standar7_2_1_d ) {
			$tahun_min = $standar7_2_1_d->tahun;
			if($tahun_min==($tahun-2)){
				$arr4[0]=$standar7_2_1_d->dana_count;
			}
			elseif ($tahun_min==($tahun-1)) {
				$arr4[1]=$standar7_2_1_d->dana_count;
			}
			elseif ($tahun_min==$tahun) {
				$arr4[2]=$standar7_2_1_d->dana_count;
			}

		}
		$standar7_2_1_e = danaPengmas::getDanaInstitusiLuarNegeri($kode_prodi,$tahun);
		 //array biaya institusi luar negeri
		$arr5 = array(0,0,0); //ts-2,ts-1,ts
		foreach ($standar7_2_1_e as $standar7_2_1_e ) {
			$tahun_min = $standar7_2_1_e->tahun;
			if($tahun_min==($tahun-2)){
				$arr5[0]=$standar7_2_1_e->dana_count;
			}
			elseif ($tahun_min==($tahun-1)) {
				$arr5[1]=$standar7_2_1_e->dana_count;
			}
			elseif ($tahun_min==$tahun) {
				$arr5[2]=$standar7_2_1_e->dana_count;
			}

		}

		return view('view3a7',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna, 
	            'kodeProdi' => $kode_prodi,
	            'standar7'=>$standar7,
	            'standar7_1_3'=> $standar7_1_3,
	            'standar7_2_3'=> $standar7_2_3,
	            'standar7_3_1'=> $standar7_3_1,
	           	'standar7_3_2'=> $standar7_3_2,
	           	'arrA'=>$arrA,
	           	'arrB' => $arrB,
	            'arrC' => $arrC,
	            'arrD' => $arrD,
	            'arrE' => $arrE,
	           	'arr1'=>$arr1,
	           	'arr2'=>$arr2,
	           	'arr3'=>$arr3,
	           	'arr4'=>$arr4,
	           	'arr5'=>$arr5,
	           	'standar7_2_1_b'=> $standar7_2_1_b,
	           	'standar7_2_1_c'=> $standar7_2_1_c,
	           	'standar7_2_1_d'=> $standar7_2_1_d,
	           	'standar7_2_1_e'=> $standar7_2_1_e,
	            'username' => $username,
	            'tahun' => $tahun

			]);
	}

	public function lihat3b7(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$listProdi;
		$totalts = 0;
		$totalts1 = 0;
		$totalts2 = 0;
		$totalDana = 0;
		$totalDana1 = 0;
		$totalDana2 = 0;
		$totalPengmas = 0;
		$totalPengmas1 = 0;
		$totalPengmas2 = 0;
		$totalDanaPengmas = 0;
		$totalDanaPengmas1 = 0;
		$totalDanaPengmas2 = 0;

		if ($request->get('selectFakultasGeneral')){
			$selectedFakultas = $request->get('selectFakultasGeneral');
			$listProdi = program_studi::getProdiByFakultas($selectedFakultas);
			$jumlahProdi = count($listProdi); //menghitung jumlah prodi
		} else {
			$selectedFakultas = $kodeFakultasPengguna;
			$listProdi = program_studi::getProdiByFakultas($selectedFakultas);
			$jumlahProdi = count($listProdi); //menghtiung jumlah prodi
		}

		if ($request->get('tahun')){
			$tahun = $request->get('tahun'); 	
		} else {
			$tahun = date('Y');
		}

		$tahun1 = $tahun-1;
		$tahun2 = $tahun-2;
		
		$arr = [];
		$arr1 = [];
		$arr2 = [];
		

		foreach ($listProdi as $l)
		{
			$kode_prodi = $l->kode_prodi;
			$nama_prodi = $l->nama_prodi;
			$ts = count(proyek::getProyek($kode_prodi, $tahun));
			$ts1 = count(proyek::getProyek($kode_prodi, $tahun1));
			$ts2 = count(proyek::getProyek($kode_prodi, $tahun2));
			$dana = proyek::getTotalDanaPenelitian($kode_prodi, $tahun);
			$dana1 = proyek::getTotalDanaPenelitian($kode_prodi, $tahun1);
			$dana2 = proyek::getTotalDanaPenelitian($kode_prodi, $tahun2);
			$totalts += $ts;
			$totalts1 += $ts1;
			$totalts2 += $ts2;
			$totalDana += $dana;
			$totalDana1 += $dana1;
			$totalDana2 += $dana2;
			$arr[$l->nama_prodi]['namaProdi'] = $nama_prodi;
			$arr[$l->nama_prodi]['ts'] = $ts;
			$arr[$l->nama_prodi]['ts-1'] = $ts1;
			$arr[$l->nama_prodi]['ts-2'] = $ts2;
			$arr[$l->nama_prodi]['dana'] = $dana;
			$arr[$l->nama_prodi]['dana1'] = $dana1;
			$arr[$l->nama_prodi]['dana2'] = $dana2;

		}

		foreach ($listProdi as $l1) {
			$kode_prodi = $l1->kode_prodi;
			$nama_prodi = $l1->nama_prodi;
			$pengmas = count(pengmas_dosen::getPengmas($kode_prodi, $tahun));
			$pengmas1 = count(pengmas_dosen::getPengmas($kode_prodi, $tahun1));
			$pengmas2 = count(pengmas_dosen::getPengmas($kode_prodi, $tahun2));
			$danaPengmas = danaPengmas::getTotalDanaPengmas($kode_prodi, $tahun);
			$danaPengmas1 = danaPengmas::getTotalDanaPengmas($kode_prodi, $tahun1);
			$danaPengmas2 = danaPengmas::getTotalDanaPengmas($kode_prodi, $tahun2);
			$totalPengmas += $pengmas;
			$totalPengmas1+=  $pengmas1;
			$totalPengmas2 += $pengmas2;
			$totalDanaPengmas += $danaPengmas;
			$totalDanaPengmas1 += $danaPengmas1;
			$totalDanaPengmas2 += $danaPengmas2;
			$arr1[$l1->nama_prodi]['namaProdi'] = $nama_prodi;
			$arr1[$l1->nama_prodi]['pengmas'] = $pengmas;
			$arr1[$l1->nama_prodi]['pengmas1'] = $pengmas1;
			$arr1[$l1->nama_prodi]['pengmas2'] = $pengmas2;
			$arr1[$l1->nama_prodi]['danaPengmas'] = $danaPengmas;
			$arr1[$l1->nama_prodi]['danaPengmas1'] = $danaPengmas1;
			$arr1[$l1->nama_prodi]['danaPengmas2'] = $danaPengmas2;
		}


			return view('view3b7',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            'listProdi' => $listProdi,
	            'jumlahProdi'=> $jumlahProdi,
	            'tahun' => $tahun,
	            'tahun1' => $tahun1,
	            'tahun2' => $tahun2,
	            'totalts' => $totalts,
	            'totalts1' => $totalts1,
	            'totalts2' => $totalts2,
	            'totalDana' => $totalDana,
	            'totalDana1' => $totalDana1,
	            'totalDana2' => $totalDana2,
	            'totalPengmas' => $totalPengmas,
				'totalPengmas1' => $totalPengmas1,
				'totalPengmas2' => $totalPengmas2,
				'totalDanaPengmas' => $totalDanaPengmas,
				'totalDanaPengmas1' => $totalDanaPengmas1,
				'totalDanaPengmas2' => $totalDanaPengmas2,
	            'arr' => $arr,
	            'arr1' => $arr1
			]);
	}

	public function edit3b7(Request $request,$kodeStandar,$kodeFakultas) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		
		//yang boleh mengakses halaman ini adalah tim akreditasi dan admin
		$role=$request->session()->get('role');
		if($role!='Tim Akreditasi' && $role!='Admin') {
			return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $role,
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $username
			]);				
		}

		$kodeStandarStr= str_replace("-",".",$kodeStandar);
		if ($request->get('tahun')){
			$tahun = $request->get('tahun'); 	
		} else {
			$tahun = date('Y');
		}

		//poin 4.1
		$standar7_json = Borang::getBorang('3b',7,$kodeFakultas,$tahun);
		$isi = $standar7_json[0]->isi;
		$standar7 = json_decode(stripslashes($isi),true);
		// dd($standar4);

			return view('update3b7-new',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            'kodeFakultas' => $kodeFakultas,
	            'kodeStandar' => $kodeStandar,
	            'standar7' => $standar7,
	            'kodeStandarStr' => $kodeStandarStr
			]);
	}

	public function submitKualitatif(Request $request,$kodeStandar,$kode,$jenisBorang) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		//yang boleh mengakses halaman ini adalah tim akreditasi dan admin
		$role=$request->session()->get('role');
		if($role!='Tim Akreditasi' && $role!='Admin') {
			return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $role,
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $username
			]);				
		}

		if ($request->get('tahun')){
			$tahun = $request->get('tahun'); 	
		} else {
			$tahun = date('Y');
		}

		$textarea=$request->get('textarea');

		$nomorStandar = explode("-", $kodeStandar)[0];
		$kodeStandarStr = str_replace("-",".", $kodeStandar);

		$standar_json = Borang::getBorang($jenisBorang,$nomorStandar,$kode,$tahun);

		$isi = $standar_json[0]->isi;
		$standar = json_decode(stripslashes($isi),true);

		$arrkodeStandar = explode('-', $kodeStandar);
		if(count($arrkodeStandar) ==3) {
			$standar['standar'.$nomorStandar][$arrkodeStandar[0].'.'.$arrkodeStandar[1]][$kodeStandarStr]['isian']=$textarea;	
			echo $standar['standar'.$nomorStandar][$arrkodeStandar[0].'.'.$arrkodeStandar[1]][$kodeStandarStr]['isian'];
		} else {
		$standar['standar'.$nomorStandar][$kodeStandarStr]['isian']=$textarea;	
		}
		$encoded_json = json_encode($standar);
		//masukin ke database

		Borang::updateBorang($jenisBorang,$nomorStandar,$kode,$tahun,$encoded_json);


		
		
		// PegawaiController::lihat3a4( $request, $kodeProdi);

		return redirect($jenisBorang.'/standar'.$nomorStandar.'/'.$kode);

		// 	return view('update3b7',[
		// 		'role' => $request->session()->get('role'),
	 //            'user' => $request->session()->get('user'),
	 //            'pegawai' => $pimpinan,      
	 //            'kode_fakultas' => $kodeFakultasPengguna,  
	 //            'username' => $username
		// 	]);
	}

}

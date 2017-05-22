<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Pimpinan;
use App\program_studi;
use App\fakultas;
use App\Dosen;
use App\tendik;
use App\Borang;
use App\proyek;
use App\kerja_sama;
use App\danaPengmas;
use App\pengmas_dosen;
use App\danaProyek;
use App\Komentar;
use App\Akreditasi;
use DB;
use App\Http\Requests;
use Charts;

class BorangController extends Controller
{
    public function _construct(){
        
    }

    public function pilihBorang3A(Request $request,$kodeProdi,$tahun) {
    	//ganti status borang

		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$namaFakultasPengguna=$QKodeFakultasPengguna[0]->nama_fakultas;	 //kode fakultas dari yang sedang login
		$role=$request->session()->get('role');
			
		$prodiBorang = program_studi::getProdi($kodeProdi);
			return view('pilihborang3a',[
				'role' => $role,
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,
	            'kodeFakultas' => $kodeFakultasPengguna,       
	           'kode_fakultas' => $kodeFakultasPengguna,       
	           'kodeProdi' => $kodeProdi,
	           'nama_fakultas' => $namaFakultasPengguna,
	            'username' => $username,
	            'prodi' => $prodiBorang,
	            'tahun' => $tahun
			]);
	}

	public function pilihBorang3B(Request $request,$kodeFakultas) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$namaFakultasPengguna=$QKodeFakultasPengguna[0]->nama_fakultas;
		$role=$request->session()->get('role');
		
		$kode_prodi=0;
		if($role=='Tim Akreditasi') {
			$timAkreditasi = Pegawai::getTimAkreditasi($username);		
			$kode_prodi=$timAkreditasi[0]->id_prodi_tim_akreditasi;
		}
		
			return view('pilihborang3b',[
				'role' => $role,
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,       
	           'kodeFakultas' => $kodeFakultas,       
	           'kode_fakultas' => $kodeFakultasPengguna,       
	           'kodeProdi' => $kode_prodi,
	          'nama_fakultas' => $namaFakultasPengguna,
	            'username' => $username,
			]);
	}

	public function lihatEvaluasi(Request $request, $idHistori,$tahun) {

		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login

		$role=$request->session()->get('role');

		
		$evaluasiDiri = Borang::getBorangByIdHistori('ED',0,$idHistori);

		//dd($evaluasiDiri);
		$standarED = json_decode(stripslashes($evaluasiDiri[0]->isi),true);
		$status = $evaluasiDiri[0]->is_reviewed;

		$role=$request->session()->get('role');
		$kodeProdi=0;
		if ($role=='Tim Akreditasi') {
			$timAkreditasi = Pegawai::getTimAkreditasi($username);		
			$selectedProdi=$timAkreditasi[0]->id_prodi_tim_akreditasi;
			$kodeProdi = $selectedProdi;
		} 
		// else {
		// if ($kodeProdi){
		// 	$selectedProdi = $kodeProdi; 	
		// 	} else {
		// 		$selectedProdi=$kodeProdiPengguna;
		// 	}	
		// }


		$QAkreditasiProdi = Akreditasi::getAkreditasiById($idHistori);
		// dd($QAkreditasiProdi);

  		$kodeProdi = $QAkreditasiProdi[0]->kode_prodi;

		//Lihat Komentar Borang
		$idBorang = Borang::getIdBorangByIdHistori('ED',0, $idHistori)[0]->id;
		$komentarED = Komentar::lihatKomentar($idBorang, '0');


		$prodiBorang = program_studi::getProdi($kodeProdi);

		// $prodiBorang = program_studi::getProdi($selectedProdi);

			return view('viewevaluasi',[
				'role' => $role,
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,       
	            'username' => $username,
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            //'isi' => $isi,
	            'standarED' => $standarED,
	            'kodeProdi' => $kodeProdi,
	            // 'prodiBorang' => $prodiBorang,
	            'tahun' => $tahun,
	            'komentarED' => $komentarED,
	            'status' => $status,
	            'prodiBorang' => $prodiBorang,
	            'idHistori' => $idHistori

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
				return redirect($request->path().'/'.$kodeProdiPengguna);
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

	public function pilihFakultasGeneral(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$role=$request->session()->get('role');
			//untuk pimpinan univ, reviewer univ, admin
			if($role=='Pimpinan Universitas' || $role=='Reviewer Universitas' || $role=='Admin'|| $role=='BPMA' || $role='UPMAF'){
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

	public function lihat3a2(Request $request, $kodeProdi,$tahun) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		
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
		
		// dd($status);
		//Lihat Komentar Borang
		$idBorang = Borang::getIdBorang('3a',2, $kodeProdi, $tahun)[0]->id;
		$komentar2_1 = Komentar::lihatKomentar($idBorang, '2-1');
		$komentar2_2 = Komentar::lihatKomentar($idBorang, '2-2');
		$komentar2_3 = Komentar::lihatKomentar($idBorang, '2-3');
		$komentar2_4 = Komentar::lihatKomentar($idBorang, '2-4');
		$komentar2_5 = Komentar::lihatKomentar($idBorang, '2-5');
		$komentar2_6 = Komentar::lihatKomentar($idBorang, '2-6');

		//Lihat Borang standar json
		$standar2_json = Borang::getBorang('3a',2,$kodeProdi,$tahun);
		$isi = $standar2_json[0]->isi;
		$status = $standar2_json[0]->is_reviewed;
		$idHistori = $standar2_json[0]->id_histori;
		$standar2 = json_decode(stripslashes($isi),true);

			return view('view3a2',[
				'role' => $role,
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            'standar2' => $standar2,
	            'kodeProdi' => $kodeProdi,
	            'prodiBorang' => $prodiBorang,
	            'tahun' => $tahun,
	            'komentar2_1' => $komentar2_1,
	            'komentar2_2' => $komentar2_2,
	            'komentar2_3' => $komentar2_3,
	            'komentar2_4' => $komentar2_4,
	            'komentar2_5' => $komentar2_5,
	            'komentar2_6' => $komentar2_6,
	            'status' => $status,
	            'idHistori'=> $idHistori
			]);
	}


	public function lihat3a4(Request $request, $kodeProdi,$tahun) {
		// wajib ada
		$role= $request->session()->get('role');
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$QKodeProdiPengguna = Pegawai::getProdiPegawai($request->session()->get('user'));		
		$kodeProdiPengguna=$QKodeProdiPengguna[0]->kode_prodi_pengajaran;	 //belum disesuain sama kode prodi tim akreditasi
		$selectedProdi;
		
		
		// end of wajib ada
			if ($role=='Tim Akreditasi') {
				$timAkreditasi = Pegawai::getTimAkreditasi($username);		
				$selectedProdi=$timAkreditasi[0]->id_prodi_tim_akreditasi;
			} 
			else {
			if ($kodeProdi){
				$selectedProdi = $kodeProdi; 	
				} else {
					$selectedProdi=$kodeProdiPengguna;
				}	
			}
			
		$prodiBorang = program_studi::getProdi($selectedProdi);


		//lihat komentar borang
		$idBorang = Borang::getIdBorang('3a',4, $kodeProdi, $tahun)[0]->id;
		$komentar4_1 = Komentar::lihatKomentar($idBorang, '4-1');
		$komentar4_2 = Komentar::lihatKomentar($idBorang, '4-2');
		$komentar4_6 = Komentar::lihatKomentar($idBorang, '4-6');
		

		//poin 4.1,4.2,4.6.1
		$standar4_json = Borang::getBorang('3a',4,$selectedProdi,$tahun);
		$isi = $standar4_json[0]->isi;
		$status = $standar4_json[0]->is_reviewed;
		$idHistori = $standar4_json[0]->id_histori;
		$standar4 = json_decode(stripslashes($isi),true);

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
		$standar4_5_3_occurences = array();
		foreach($standar4_5_3 as $standar4_5_3_count){
		  $nama_pegawai = $standar4_5_3_count-> namaPegawai;

		  if(!isset($standar4_5_3_occurences[$nama_pegawai])){
		    $standar4_5_3_occurences[$nama_pegawai] = 0;
		  }

		  $standar4_5_3_occurences[$nama_pegawai]++;
		}
		// dd($standar4_5_3_occurences);
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
	            'standar4_5_3_occurences' => $standar4_5_3_occurences,
	            'standar4_5_4' => $standar4_5_4,
	            'standar4_5_5' => $standar4_5_5,
	            'arrA' => $arrA,
	            'arrB' => $arrB,
	            'arrC' => $arrC,
	            'arrD' => $arrD,
	            'kodeProdi' => $selectedProdi,
	            'komentar4_1' => $komentar4_1,
	            'komentar4_2' => $komentar4_2,
	            'komentar4_6' => $komentar4_6,
	            'status' => $status,
	            'idHistori' => $idHistori
			]);
	}

	public function lihat3a7(Request $request, $kode_prodi,$tahun) {
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


		//lihat komentar borang
		$idBorang = Borang::getIdBorang('3a',7, $kode_prodi, $tahun)[0]->id;
		$komentar7_1 = Komentar::lihatKomentar($idBorang, '7-1');
		$komentar7_2 = Komentar::lihatKomentar($idBorang, '7-2');


		$prodiBorang = program_studi::getProdi($kode_prodi);
		// echo $selectedProdi;
		// echo $tahun;
		$standar7_json = Borang::getBorang('3a',7,$kode_prodi,$tahun);
		// dd($standar7_json);
		$isi = $standar7_json[0]->isi;
		$status = $standar7_json[0]->is_reviewed;
		$idHistori = $standar7_json[0]->id_histori;
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
	            'tahun' => $tahun,
	            'prodiBorang' => $prodiBorang,
	            'komentar7_1' => $komentar7_1,
	            'komentar7_2' => $komentar7_2,
	            'status' => $status,
	            'idHistori' => $idHistori
			]);
	}

	public function lihat3b2(Request $request, $idHistori,$tahun) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$role = $request->session()->get('role');
		$getNamaFakultas = fakultas::getNamaFakultas($kodeFakultasPengguna)[0]->nama_fakultas;

		$kodeProdi;
		if($role=='Tim Akreditasi') {
			$timAkreditasi = Pegawai::getTimAkreditasi($username);		
			$kodeProdi=$timAkreditasi[0]->id_prodi_tim_akreditasi;
		}

		$QAkreditasiProdi = Akreditasi::getAkreditasiById($idHistori);
		// dd($QAkreditasiProdi);

  		$kodeProdi = $QAkreditasiProdi[0]->kode_prodi;

		//Lihat Komentar Borang
		$idBorang = Borang::getIdBorangByIdHistori('3b',2, $idHistori)[0]->id;
		$komentar2_1 = Komentar::lihatKomentar($idBorang, '2-1');
		$komentar2_2 = Komentar::lihatKomentar($idBorang, '2-2');
		$komentar2_3 = Komentar::lihatKomentar($idBorang, '2-3');
		$komentar2_4 = Komentar::lihatKomentar($idBorang, '2-4');
		$komentar2_5 = Komentar::lihatKomentar($idBorang, '2-5');

		$standar2_json = Borang::getBorangByIdHistori("3b",2,$idHistori);
		$isi = $standar2_json[0]->isi;
		$status = $standar2_json[0]->is_reviewed;
		$standar2 = json_decode(stripslashes($isi),true);
		// dd($isi);


			return view('view3b2',[
				'role' => $role,
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,     
	            'kode_fakultas' => $kodeFakultasPengguna,
	            'username' => $username,
	            'standar2' => $standar2,
	            'kodeProdi' => $kodeProdi,
	            'tahun' => $tahun,
	            'komentar2_1' => $komentar2_1,
	            'komentar2_2' => $komentar2_2,
	            'komentar2_3' => $komentar2_3,
	            'komentar2_4' => $komentar2_4,
	            'komentar2_5' => $komentar2_5,
	            'nama_fakultas' => $getNamaFakultas,
	            'status' => $status,
	            'idHistori' => $idHistori
			]);

		
	}

	public function lihat3b4(Request $request,$idHistori,$tahun) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$listProdi;
		$totalFakultas = 0;
		$totalPendidikanFakultas = 0;
		$totalPensiun = 0;
		$totalDosenBaru = 0;
		$totalTugasBelajarS2 = 0;
		$totalTugasBelajarS3 = 0;
		$role = $request->session()->get('role');

		$getNamaFakultas = fakultas::getNamaFakultas($kodeFakultasPengguna)[0]->nama_fakultas;

		// $kodeProdi=0;
		if($role=='Tim Akreditasi') {
			$timAkreditasi = Pegawai::getTimAkreditasi($username);		
			$kodeProdi=$timAkreditasi[0]->id_prodi_tim_akreditasi;
		}

		$QAkreditasiProdi = Akreditasi::getAkreditasiById($idHistori);
		// dd($QAkreditasiProdi);

  		$kodeProdi = $QAkreditasiProdi[0]->kode_prodi;


		$standar4_json = Borang::getBorangByIdHistori('3b',4,$idHistori);
		$isi = $standar4_json[0]->isi;
		$status = $standar4_json[0]->is_reviewed;
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
		
		//Lihat Komentar Borang
		$idBorang = Borang::getIdBorangByIdHistori('3b',4, $idHistori)[0]->id;
		$komentar4_1 = Komentar::lihatKomentar($idBorang, '4-1');
		$komentar4_2 = Komentar::lihatKomentar($idBorang, '4-2');

		$arr = [];
		$arr1 = [];
		$arr2 = [];
		

		foreach ($listProdi as $l)
		{
			$kode_prodi = $l->kode_prodi;
			$asistenAhli = count(Dosen::getDosenTetapSesuaiAsistenAhli($kode_prodi));
			$lektor = count(Dosen::getDosenTetapSesuaiLektor($kode_prodi));
			$lektorKepala = count(Dosen::getDosenTetapSesuaiLektorKepala($kode_prodi));
			$guruBesar = count(Dosen::getDosenTetapSesuaiGuruBesarProfesor($kode_prodi));
			$total = $asistenAhli+$lektor+$lektorKepala+$guruBesar;
			$arr[$l->nama_prodi]['asistenAhli'] = $asistenAhli;
			$arr[$l->nama_prodi]['lektor'] = $lektor;
			$arr[$l->nama_prodi]['lektorKepala'] = $lektorKepala;
			$arr[$l->nama_prodi]['guruBesar'] = $guruBesar;
			$arr[$l->nama_prodi]['total'] = $total;
			$totalFakultas += $total;
		}

		foreach ($listProdi as $l2) {
			$kode_prodi = $l2->kode_prodi;
			$pendidikanS1 = count(Dosen::getDosenTetapSesuaiPendidikanS1($kode_prodi));
			$pendidikanS2 = count(Dosen::getDosenTetapSesuaiPendidikanS2($kode_prodi));
			$pendidikanS3 = count(Dosen::getDosenTetapSesuaiPendidikanS3($kode_prodi));
			$totalPendidikan = $pendidikanS1+$pendidikanS2+$pendidikanS3;
			$arr1[$l2->nama_prodi]['S1'] = $pendidikanS1;
			$arr1[$l2->nama_prodi]['S2'] = $pendidikanS2;
			$arr1[$l2->nama_prodi]['S3'] = $pendidikanS3;
			$arr1[$l2->nama_prodi]['totalPendidikan'] = $totalPendidikan;
			$totalPendidikanFakultas += $totalPendidikan;
		}

		foreach ($listProdi as $l1) {
			$kode_prodi = $l1->kode_prodi;
			$pensiun = count(Dosen::getDosenTetapSesuaiStatusPensiun($kode_prodi));
			$dosenBaru = count(Dosen::getDosenTetapSesuaiStatusDosenBaru($kode_prodi));
			$tugasBelajarS2 = count(Dosen::getDosenTetapSesuaiStatusTugasBelajarS2($kode_prodi));
			$tugasBelajarS3 = count(Dosen::getDosenTetapSesuaiStatusTugasBelajarS3($kode_prodi));
			$arr2[$l1->nama_prodi]['pensiun'] = $pensiun;
			$arr2[$l1->nama_prodi]['dosenBaru'] = $dosenBaru;
			$arr2[$l1->nama_prodi]['tugasBelajarS2'] = $tugasBelajarS2;
			$arr2[$l1->nama_prodi]['tugasBelajarS3'] = $tugasBelajarS3;
			$totalPensiun += $pensiun;
			$totalDosenBaru += $dosenBaru;
			$totalTugasBelajarS2 += $tugasBelajarS2;
			$totalTugasBelajarS3 += $tugasBelajarS3;
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
	            'listProdi1' => $listProdi,
	            'arrA' => $arrA,
	            'arrB' => $arrB,
	            'arrC' => $arrC,
	            'arrD' => $arrD,
	            'kodeFakultasSelected' => $selectedFakultas,
	            'arr' => $arr,
	            'arr1' => $arr1,
	            'arr2' => $arr2,
	            'totalPensiun' => $totalPensiun,
	            'totalDosenBaru' => $totalDosenBaru,
	            'totalTugasBelajarS2' => $totalTugasBelajarS2,
	            'totalTugasBelajarS3' => $totalTugasBelajarS3,
	            'jumlahProdi' => $jumlahProdi,
	            'totalFakultas' => $totalFakultas,
	            'totalPendidikanFakultas' => $totalPendidikanFakultas,
	            'standar4' => $standar4,
	            'komentar4_1' => $komentar4_1,
	            'komentar4_2' => $komentar4_2,
	            'nama_fakultas' => $getNamaFakultas,
	            'status' => $status,
	            'tahun' => $tahun,
	            'idHistori' => $idHistori,
	            'kodeProdi' => $kodeProdi
 			]);

	}

	public function lihat3b7(Request $request,$idHistori) {
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
		$role = $request->session()->get('role');

		$getNamaFakultas = fakultas::getNamaFakultas($kodeFakultasPengguna)[0]->nama_fakultas;

		if($role=='Tim Akreditasi') {
			$timAkreditasi = Pegawai::getTimAkreditasi($username);		
			$kodeProdi=$timAkreditasi[0]->id_prodi_tim_akreditasi;
		}

		$QAkreditasiProdi = Akreditasi::getAkreditasiById($idHistori);
		// dd($QAkreditasiProdi);

  		$kodeProdi = $QAkreditasiProdi[0]->kode_prodi;

		$standar7_json = Borang::getBorangByIdHistori('3b',7,$idHistori);
		$isi = $standar7_json[0]->isi;
		$status = $standar7_json[0]->is_reviewed;
		$tahun = $standar7_json[0]->tahun;
		$standar7 = json_decode(stripslashes($isi),true);

		if ($request->get('selectFakultasGeneral')){
			$selectedFakultas = $request->get('selectFakultasGeneral');
			$listProdi = program_studi::getProdiByFakultas($selectedFakultas);
			$jumlahProdi = count($listProdi); //menghitung jumlah prodi
		} else {
			$selectedFakultas = $kodeFakultasPengguna;
			$listProdi = program_studi::getProdiByFakultas($selectedFakultas);
			$jumlahProdi = count($listProdi); //menghtiung jumlah prodi
		}


		$tahun1 = $tahun-1;
		$tahun2 = $tahun-2;

		//Lihat Komentar Borang
		$idBorang = Borang::getIdBorangByIdHistori('3b',7, $idHistori)[0]->id;
		$komentar7_1 = Komentar::lihatKomentar($idBorang, '7-1');
		$komentar7_2 = Komentar::lihatKomentar($idBorang, '7-2');
		
		$arr = [];
		$arr1 = [];
		$arr2 = [];
		
		//Untuk 7.1 Penelitian
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

		//Untuk 7.2 Pelayanan/Pengabdian kepada Masyarakat
		foreach ($listProdi as $l1) {
			$kode_prodi = $l1->kode_prodi;
			$nama_prodi = $l1->nama_prodi;
			$pengmas = count(pengmas_Dosen::getPengmas($kode_prodi, $tahun));
			$pengmas1 = count(pengmas_Dosen::getPengmas($kode_prodi, $tahun1));
			$pengmas2 = count(pengmas_Dosen::getPengmas($kode_prodi, $tahun2));
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

		//Untuk 7.3 Kegiatan Kerjasama dengan Instansi Lain
		$kerjasamaDalamNegeri = kerja_sama::getKerjaSamaDalamNegeriByFakultas($selectedFakultas, $tahun);
		$kerjasamaLuarNegeri = kerja_sama::getKerjaSamaLuarNegeriByFakultas($selectedFakultas, $tahun);


		return view('view3b7',[
			'role' => $role,
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
            'arr1' => $arr1,
            'kerjasamaDalamNegeri' => $kerjasamaDalamNegeri,
            'kerjasamaLuarNegeri' => $kerjasamaLuarNegeri,
            'standar7' => $standar7,
            'komentar7_1' => $komentar7_1,
            'komentar7_2' => $komentar7_2,
            'nama_fakultas' => $getNamaFakultas,
            'status' => $status,
            'idHistori' => $idHistori,
            'tahun' => $tahun,
            'kodeProdi'=> $kodeProdi
		]);
	}

	public function edit3a2(Request $request, $kodeStandar, $idHistori) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$kodeStandarStr= str_replace("-",".",$kodeStandar);
		$nomorStandar = explode("-", $kodeStandar)[0];
		
		$role=$request->session()->get('role');
		if ($role=='Tim Akreditasi' || $role=='Admin') {
			if($role=='Tim Akreditasi') {
				$timAkreditasi = Pegawai::getTimAkreditasi($username);		
				$selectedProdi=$timAkreditasi[0]->id_prodi_tim_akreditasi;
				$kodeProdi = $selectedProdi;
				$prodiBorang = program_studi::getProdi($selectedProdi);				
			}
		} else {
			return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $role,
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $username
			]);				
		}
		
		$standar2_json = Borang::getBorangByIdHistori('3a',2,$idHistori);
		$isi = $standar2_json[0]->isi;
		$tahun = $standar2_json[0]->tahun;
		$kodeProdi = $standar2_json[0]->kode_prodi;
		$status = $standar2_json[0]->is_reviewed;
		$standar2 = json_decode(stripslashes($isi),true);

			return view('update3a2-new',[
				'role' => $role,
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            'standar2' => $standar2,
	            'kodeProdi' => $kodeProdi,
	            'kodeStandar' => $kodeStandar,
	            'kodeStandarStr' => $kodeStandarStr,
	            'prodiBorang' => $kodeProdi,
	            'tahun' => $tahun,
	            'idHistori' => $idHistori,
	            'status' => $status
			]);
	}

	// public function edit3a25(Request $request,$kodeStandar,$nomorIsian,$kodeProdi) {
	// 	$username=$request->session()->get('user');
	// 	$pimpinan = Pegawai::getPegawaiByUsername($username);
	// 	$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
	// 	$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
	// 	$kodeStandarStr= str_replace("-",".",$kodeStandar);
	// 	$nomorStandar = explode("-", $kodeStandar)[0];
		
	// 	$standar2_json = Borang::getBorang('3a', $nomorStandar,$kodeProdi,2017);
	// 	$isi = $standar2_json[0]->isi;
	// 	$standar2 = json_decode(stripslashes($isi),true);
		
	// 		return view('update3a25-new',[
	// 			'role' => $request->session()->get('role'),
	//             'user' => $request->session()->get('user'),
	//             'pegawai' => $pimpinan,      
	//             'kode_fakultas' => $kodeFakultasPengguna,  
	//             'username' => $username,
	//             'standar2' => $standar2,
	//             'kodeProdi' => $kodeProdi,
	//             'kodeStandar' => $kodeStandar,
	//             'kodeStandarStr' => $kodeStandarStr,
	//             'nomorIsian' => $nomorIsian
	// 		]);
	// }

	public function edit3a4(Request $request,$kodeStandar,$idHistori) {
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

		//poin 4.1
		$standar4_json = Borang::getBorangByIdHistori('3a',4,$idHistori);
		$isi = $standar4_json[0]->isi;
		$tahun = $standar4_json[0]->tahun;
		$kodeProdi = $standar4_json[0]->kode_prodi;
		$status = $standar4_json[0]->is_reviewed;
		$standar4 = json_decode($isi,true);		
		
			return view('update3a4-new',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            'kodeProdi' => $kodeProdi,
	            'kodeStandar' => $kodeStandar,
	            'standar4' => $standar4,
	            'kodeStandarStr' => $kodeStandarStr,
	            'idHistori' => $idHistori,
	            'tahun' => $tahun,
	            'status' => $status
			]);
	}

	public function edit3a7(Request $request,$kodeStandar,$idHistori) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$kodeStandarStr= str_replace("-",".",$kodeStandar);
		$nomorStandar = explode("-", $kodeStandar)[0];
		
		$role=$request->session()->get('role');
		if ($role=='Tim Akreditasi' || $role=='Admin') {
			if($role=='Tim Akreditasi') {
				$timAkreditasi = Pegawai::getTimAkreditasi($username);		
				$selectedProdi=$timAkreditasi[0]->id_prodi_tim_akreditasi;
				$prodiBorang = program_studi::getProdi($selectedProdi);	
			}
		} else {
			return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $role,
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $username
			]);				
		}
		// else {
		// if ($kodeProdi){
		// 	$selectedProdi = $kodeProdi; 	
		// 	} else {
		// 		$selectedProdi=$kodeProdiPengguna;
		// 	}	
		// }

		// if ($request->get('tahun')){
		// 	$tahun = $request->get('tahun'); 	
		// } else {
		// 	$tahun = date('Y');
		// }

		$standar7_json = Borang::getBorangByIdHistori('3a', $nomorStandar,$idHistori);
		$isi = $standar7_json[0]->isi;
		$tahun = $standar7_json[0]->tahun;
		$kodeProdi = $standar7_json[0]->kode_prodi;
		$status = $standar7_json[0]->is_reviewed;
		$standar7 = json_decode(stripslashes($isi),true);

			return view('update3a7-new',[
				'role' => $role,
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            'standar7' => $standar7,
	            'kodeProdi' => $kodeProdi,
	            'kodeStandar' => $kodeStandar,
	            'kodeStandarStr' => $kodeStandarStr,
	            'prodiBorang' => $kodeProdi,
	            'tahun' => $tahun,
	            'idHistori' => $idHistori,
	            'status' => $status
			]);
	}

	public function edit3b2(Request $request, $kodeStandar, $idHistori) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$role = $request->session()->get('role');
		$kodeProdi=0;
		if($role=='Tim Akreditasi') {
			$timAkreditasi = Pegawai::getTimAkreditasi($username);		
			$kodeProdi=$timAkreditasi[0]->id_prodi_tim_akreditasi;
		}
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
		
		$standar2_json = Borang::getBorangByIdHistori('3b',2,$idHistori);
		$isi = $standar2_json[0]->isi;
		$tahun = $standar2_json[0]->tahun;
		$status = $standar2_json[0]->is_reviewed;
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
	            'kodeStandarStr' => $kodeStandarStr,
	            // 'kodeFakultas' => $kodeFakultas
	            'tahun'=>$tahun,
	            'idHistori' =>$idHistori,
	            'status' => $status
			]);
	}

	public function edit3b4(Request $request,$kodeStandar,$idHistori) {

		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login

		$role = $request->session()->get('role');
		if($role=='Tim Akreditasi') {
			$timAkreditasi = Pegawai::getTimAkreditasi($username);		
			$kodeProdi=$timAkreditasi[0]->id_prodi_tim_akreditasi;
		}
		//yang boleh mengakses halaman ini adalah tim akreditasi dan admin
		if($role!='Tim Akreditasi' && $role!='Admin') {
			return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $role,
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $username
			]);				
		}

		$kodeStandarStr= str_replace("-",".",$kodeStandar);
		//poin 4.1
		$standar4_json = Borang::getBorangByIdHistori('3b',4,$idHistori);
		$isi = $standar4_json[0]->isi;
		$tahun = $standar4_json[0]->tahun;
		$status = $standar4_json[0]->is_reviewed;
		$standar4 = json_decode(stripslashes($isi),true);
		// dd($standar4);

			return view('update3b4-new',[

				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'kodeProdi' => $kodeProdi,
	            'username' => $username,
	            // 'kodeFakultas' => $kodeFakultas,
	            'kodeStandar' => $kodeStandar,
	            'standar4' => $standar4,
	            'kodeStandarStr' => $kodeStandarStr,
	            'idHistori' => $idHistori,
	            'tahun' => $tahun,
	            'status'=>$status
			]);
	}


	public function edit3b7(Request $request,$kodeStandar,$idHistori) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$role = $request->session()->get('role');
		// $kodeProdi=0;
		if($role=='Tim Akreditasi') {
			$timAkreditasi = Pegawai::getTimAkreditasi($username);		
			$kodeProdi=$timAkreditasi[0]->id_prodi_tim_akreditasi;
		}

		//yang boleh mengakses halaman ini adalah tim akreditasi dan admin
		if($role!='Tim Akreditasi' && $role!='Admin') {
			return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $role,
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $username
			]);				
		}

		$kodeStandarStr= str_replace("-",".",$kodeStandar);


		//poin 4.1
		$standar7_json = Borang::getBorangByIdHistori('3b',7,$idHistori);
		$isi = $standar7_json[0]->isi;
		$tahun = $standar7_json[0]->tahun;
		$kodeProdi = $standar7_json[0]->kode_prodi;
		$status = $standar7_json[0]->is_reviewed;
		$standar7 = json_decode(stripslashes($isi),true);
		// dd($standar4);

			return view('update3b7-new',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            // 'kodeFakultas' => $kodeFakultas,
	            'kodeStandar' => $kodeStandar,
	            'standar7' => $standar7,
	            'kodeStandarStr' => $kodeStandarStr,
	            'kodeProdi' => $kodeProdi,
	            'tahun'=>$tahun,
	            'idHistori' => $idHistori,
	            'status'=>$status
			]);
	}

	public function submit3a25(Request $request,$nomorIsian,$kodeStandar,$kodeProdi,$jenisBorang) {
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

		$standar_json = Borang::getBorang($jenisBorang,$nomorStandar,$kodeProdi,2017);
		$isi = $standar_json[0]->isi;
		$standar = json_decode(stripslashes($isi),true);
		$standar['standar'.$nomorStandar][$kodeStandarStr]['isian'][$nomorIsian]=$textarea;	
		$encoded_json = json_encode($standar,JSON_UNESCAPED_SLASHES);
		//masukin ke database
		Borang::updateBorang($jenisBorang,$nomorStandar,$kodeProdi,$tahun,$encoded_json);
		return redirect($jenisBorang.'/standar'.$nomorStandar.'/'.$kodeProdi);
	}

	public function editevaluasi(Request $request,$jenis,$idHistori) {
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



		//$kodeStandarStr= str_replace("-",".",$kodeStandar);
		

		$evaluasiDiri = Borang::getBorangByIdHistori('ED',0,$idHistori);
		$isi = $evaluasiDiri[0]->isi;
		$tahun = $evaluasiDiri[0]->tahun;
		$status = $evaluasiDiri[0]->is_reviewed;
		$kodeProdi = $evaluasiDiri[0]->kode_prodi;
		$standarED = json_decode(stripslashes($isi),true);

			return view('updateevaluasi',[
				'role' => $request->session()->get('role'),
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,
	            'jenis' => $jenis,     
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            'standarED' => $standarED,
	            'kodeProdi' => $kodeProdi,
	            // 'kodeStandar' => $kodeStandar,
	             'isi' => $isi,
	             'tahun' => $tahun,
	             'idHistori' => $idHistori,
	             'status' => $status
	            // 'kodeStandarStr' => $kodeStandarStr
			]);
	}

	public function submitKualitatif(Request $request,$kodeStandar,$idHistori,$jenisBorang) {
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


		$textarea=rawurlencode($request->get('textarea'));
		
		// echo json_encode($textarea2);
		// $encoded_html= json_encode($textarea);
		$nomorStandar = explode("-", $kodeStandar)[0];
		$kodeStandarStr = str_replace("-",".", $kodeStandar);

		$standar_json = Borang::getBorangByIdHistori($jenisBorang,$nomorStandar,$idHistori);

		$isi = $standar_json[0]->isi;
		$standar = json_decode(stripslashes($isi),true);

		$arrkodeStandar = explode('-', $kodeStandar);
		if(count($arrkodeStandar) ==3) {
			$standar['standar'.$nomorStandar][$arrkodeStandar[0].'.'.$arrkodeStandar[1]][$kodeStandarStr]['isian']=$textarea;	
			// echo $standar['standar'.$nomorStandar][$arrkodeStandar[0].'.'.$arrkodeStandar[1]][$kodeStandarStr]['isian'];
		} else {
		$standar['standar'.$nomorStandar][$kodeStandarStr]['isian']=$textarea;	
		}
		$encoded_json = json_encode($standar,JSON_UNESCAPED_SLASHES);
		//masukin ke database

		Borang::updateBorangByIdHistori($jenisBorang,$nomorStandar,$idHistori,$encoded_json);
		// echo $jenisBorang;
		$request->session()->put('success','1');
		return redirect($jenisBorang.'/standar'.$nomorStandar.'edit/'.$kodeStandar.'/'.$idHistori);

	}

	public function submitevaluasi(Request $request,$jenis,$idHistori,$jenisBorang) {
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

		$textarea=rawurlencode($request->get('textarea'));
		$standarED_json = Borang::getBorangByIdHistori('ED',0,$idHistori);
		$isi =$standarED_json[0]->isi;
		$standarED = json_decode(stripslashes($isi),true);
				
		$standarED['evaluasidiri'][$jenis]=$textarea;	
		$encoded_json = json_encode($standarED,JSON_UNESCAPED_SLASHES);

		
		Borang::updateBorangByIdHistori('ED',0,$idHistori,$encoded_json);
		$request->session()->put('success','1');
		return redirect('/evaluasidiri/edit/'.$jenis.'/'.$idHistori);
	}

	public function komenBorang(Request $request, $kodeStandar, $kodeProdi, $idHistori, $jenisBorang) {
		$username=$request->session()->get('user');
		$pegawai = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($username);
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$nomorStandar = explode("-", $kodeStandar)[0];

		$QAkreditasiProdi = Akreditasi::getAkreditasiById($idHistori);
		// dd($QAkreditasiProdi);

  		$kodeProdi = $QAkreditasiProdi[0]->kode_prodi;
  		$tahun = $QAkreditasiProdi[0]->tahun_keluar;
		

		$role=$request->session()->get('role');
		$idPegawai = $pegawai->id_pegawai;
		$isi = $request->get('isi-komentar');
		//dd($isi);

		$idBorang = Borang::getIdBorang($jenisBorang, $nomorStandar, $kodeProdi, $tahun); //Tahun masih hardcode belum menyesuaikan
		
		Komentar::tambahKomentar($idBorang[0]->id, $kodeStandar, $isi, $idPegawai);
		
		if($jenisBorang=='ED') {
			return redirect('evaluasidiri/'.$idHistori.'/'.$tahun);
		} elseif($jenisBorang=='3B') {
			return redirect($jenisBorang.'/'.$idHistori.'/'.$tahun.'/standar'.$nomorStandar);
		}
		return redirect($jenisBorang.'/'.$kodeProdi.'/'.$tahun.'/standar'.$nomorStandar);

	}

	public function submitBorangtoReviewer (Request $request, $idHistori,$jenisBorang,$kode) {
		$username=$request->session()->get('user');
		$pegawai = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($username);
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	

		//is reviewed 3a 2 4 7 jadi is reviewed
		// Akreditasi::submitStatusAkreditasi($idHistori,2);
		Borang::updateStatus($idHistori,$jenisBorang,1);

		return redirect('homestatus');

	}

	public function submitBorangtoBPMA (Request $request, $idHistori,$jenisBorang,$kode) {
		$username=$request->session()->get('user');
		$pegawai = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($username);
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	
		Borang::updateStatus($idHistori,$jenisBorang,3);
		//cek se id historinya, kalo is reviewed semua 1 berarti ganti status akreditasinya
		$allBorang = Borang::getAllBorangByIdHistori($idHistori);
		$isAllReviewed=true;
		foreach ($allBorang as $borang) {
			if($borang->id_histori!=1) {
				$isAllReviewed = false;
				break;
			}
		}

		if ($isAllReviewed) {
			Akreditasi::updateStatus($idHistori,3);
		}


		return redirect('homestatus');

	}

	public function returntoTimAkreditasi (Request $request, $idHistori,$jenisBorang,$kode) {
		$username=$request->session()->get('user');
		$pegawai = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($username);
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	

		//is reviewed 3a 2 4 7 jadi is reviewed
		Borang::updateStatus($idHistori,$jenisBorang,0);

		return redirect('homestatus');

	}

	
}
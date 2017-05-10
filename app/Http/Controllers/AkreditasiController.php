<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Pimpinan;
use App\program_studi;
use App\Akreditasi;
use App\fakultas;
use App\dosen;
use App\tendik;
use App\Borang;
use DB;

class AkreditasiController extends Controller
{
    public function _construct(){
        
    }

    /**
	 * Method tambahPengguna untuk memberikan akses kepada suatu pegawai
	 * 
	 * @param string $username username pegawai yang ingin diberikan akses
	 * @return view halaman notifikasi bahwa user telah ditambahkan sebagai tim akreditasi
	 */
	public function editAkreditasi($tahun, $kodeProdi, Request $request) {
		//munculin detail akreditasi : kode prodi, nama prodi, nama univ, nilai akreditasi, huruf akreditasi
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
    	$kodeFakultasPengguna= $QKodeFakultasPengguna[0]->kode_fakultas;

    	$role = $request->session()->get('role');

  		//validasi role. yang bisa edit akreditasi : BPMA
  		if ($role=='BPMA' || $role=='Admin') {
  			$QAkreditasiProdi = Akreditasi::getAkreditasi($tahun,$kodeProdi);
		return view('updateakreditasi', [
					'role' => $request->session()->get('role'),
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $request->session()->get('user'),
					'akreditasi_prodi' => $QAkreditasiProdi[0],
					'tahun' => $tahun,
					'kodeProdi' => $kodeProdi
			]);	
 		} else {
  			return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $request->session()->get('role'),
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $request->session()->get('user')
			]);
  		}

		

	}

	public function submitAkreditasi($tahun, $kodeProdi, Request $request) {
		//munculin detail akreditasi : kode prodi, nama prodi, nama univ, nilai akreditasi, huruf akreditasi
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
    	$kodeFakultasPengguna= $QKodeFakultasPengguna[0]->kode_fakultas;

    	$role = $request->session()->get('role');

  		//validasi role. yang bisa edit akreditasi : BPMA
  		//validasi role. yang bisa edit akreditasi : BPMA dan admin
  		if ($role=='BPMA' || $role=='Admin') {
  			
  			//hitung peringkat akreditasi
	  		$nilai = $request->get('nilai_akreditasi');
	  		$peringkat='';
	  		$keterangan='';
	  		if ($nilai>360 && $nilai<=400) {
	  			$peringkat='A';
	  			$keterangan='Sangat Baik';
	  		} else if($nilai>300 && $nilai<=360) {
	  			$peringkat='B';
	  			$keterangan='Baik';
	  		} else if ($nilai>=200 && $nilai<=300) {
	  			$peringkat='C';
	  			$keterangan='Cukup';
	  		} else {
	  			$peringkat='D';
	  			$keterangan='Kurang';
	  		}
			$QUpdateNilaiAkreditasi = Akreditasi::updateNilai($kodeProdi,$tahun, $nilai,$peringkat,$keterangan);

			return 'akreditasi berhasil terupdate'; //ke halaman histori akreditasi
  		} else {
	   			return view('error', [
 					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
 					'role' => $request->session()->get('role'),
 					'kode_fakultas' => $kodeFakultasPengguna,
 					'user' => $request->session()->get('user')
			]);
		}

	}

	public function tambahAkreditasi(Request $request) {
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
	   	$kodeFakultasPengguna= $QKodeFakultasPengguna[0]->kode_fakultas;

    	$role = $request->session()->get('role');
    	$kodeProdi = $request -> get('kodeProdi');
    	$tahun = $request -> get('tahun');
  		//validasi role. yang bisa edit akreditasi : BPMA dan admin
  		if ($role=='UPMAF' || $role=='Pimpinan Fakultas') {
  			//tambah ke database histori akreditasi, status = new
  			Akreditasi::tambahAkreditasi($kodeProdi,$tahun);
  			$idHistori = Akreditasi::getIDAkreditasi($kodeProdi,$tahun)->id;
  			//tambah ke database borang
  			Borang::inisiasiBorang($kodeProdi,$tahun,$idHistori,'3A','2');
  			Borang::inisiasiBorang($kodeProdi,$tahun,$idHistori,'3A','4');
 			Borang::inisiasiBorang($kodeProdi,$tahun,$idHistori,'3A','7');
  			Borang::inisiasiBorang($kodeProdi,$tahun,$idHistori,'3B','2');
  			Borang::inisiasiBorang($kodeProdi,$tahun,$idHistori,'3B','4');
  			Borang::inisiasiBorang($kodeProdi,$tahun,$idHistori,'3B','7');
  			Borang::inisiasiBorang($kodeProdi,$tahun,$idHistori,'ED',NULL);

  			return 'tambah borang berhasil ye';
		} else {
		return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $request->session()->get('role'),
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $request->session()->get('user')
			]);
		}
	}
}

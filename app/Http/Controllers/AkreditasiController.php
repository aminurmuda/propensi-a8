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
	public function editAkreditasi($kodeProdi, $tahun, Request $request) {
		//munculin detail akreditasi : kode prodi, nama prodi, nama univ, nilai akreditasi, huruf akreditasi
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
    	$kodeFakultasPengguna= $QKodeFakultasPengguna[0]->kode_fakultas;

    	$role = $request->session()->get('role');

  		//validasi role. yang bisa edit akreditasi : BPMA
  		if ($role!='BPMA') {
  			return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $request->session()->get('role'),
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $request->session()->get('user')
			]);	
  		}

		$QAkreditasiProdi = Akreditasi::getAkreditasi($kodeProdi,$tahun);
		
		return view('menampilkan view form update akreditasi');

	}

	public function submitAkreditasi($kodeProdi, $tahun, $nilai, Request $request) {
		//munculin detail akreditasi : kode prodi, nama prodi, nama univ, nilai akreditasi, huruf akreditasi
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
    	$kodeFakultasPengguna= $QKodeFakultasPengguna[0]->kode_fakultas;

    	$role = $request->session()->get('role');

  		//validasi role. yang bisa edit akreditasi : BPMA
  		if ($role!='BPMA') {
  			return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $request->session()->get('role'),
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $request->session()->get('user')
			]);	
  		}
  		
  		//hitung peringkat akreditasi
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

		return view('akreditasi berhasil terupdate');

	}
}

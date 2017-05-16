<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Pimpinan;
use App\program_studi;
use App\Akreditasi;
use App\fakultas;
use App\Dosen;
use App\tendik;
use App\Borang;
use DB;
use App\Http\Requests;
use Charts;

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
	public function editAkreditasi($idHistori, Request $request) {
		//munculin detail akreditasi : kode prodi, nama prodi, nama univ, nilai akreditasi, huruf akreditasi
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
    	$kodeFakultasPengguna= $QKodeFakultasPengguna[0]->kode_fakultas;

    	$role = $request->session()->get('role');

  		//validasi role. yang bisa edit akreditasi : BPMA
  		if ($role=='BPMA' || $role=='Admin') {
  			$QAkreditasiProdi = Akreditasi::getAkreditasiById($idHistori);
  			$kodeProdi = $QAkreditasiProdi[0]->id;
  			$tahun = $QAkreditasiProdi[0]->tahun_keluar;
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
			$QUpdateNilaiAkreditasi = Akreditasi::updateNilai($kodeProdi,$tahun, $nilai,$peringkat,$keterangan,8);
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
  		if ($role=='UPMAF' || $role=='Pimpinan Fakultas' || $role=='Admin') {
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

  			return redirect()->back();
		} else {
		return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $request->session()->get('role'),
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $request->session()->get('user')
			]);
		}
	}

		public function lihatRiwayat(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$role=$request->session()->get('role');
		$getAllAkreditasi = Akreditasi::getAllAkreditasi($kodeFakultasPengguna);
		$listProdi;
		$totalPensiun = 0;
		$totalDosenBaru = 0;
		$totalTugasBelajarS2 = 0;
		$totalTugasBelajarS3 = 0;
		//$akreditasi = Akreditasi::getAllAkreditasi($kode_fakultas);

		if ($request->get('tahun')){
			$tahun = $request->get('tahun'); 	
		} else {
			$tahun = date('Y');
		}

		if ($request->get('selectFakultasGeneral')){
			$selectedFakultas = $request->get('selectFakultasGeneral');
			$listProdi = program_studi::getProdiByFakultas($selectedFakultas);
			$jumlahProdi = count($listProdi); //menghitung jumlah prodi
		} else {
			$selectedFakultas = $kodeFakultasPengguna;
			$listProdi = program_studi::getProdiByFakultas($selectedFakultas);
			$jumlahProdi = count($listProdi); //menghtiung jumlah prodi
		}

		// $array_akreditasi = array();
		// foreach ($getAllAkreditasi as $getAllAkreditasi) {
		// 	$prodi = $getAllAkreditasi -> nama_prodi;
		// 	$tahun_akreditasi = $getAllAkreditasi -> tahun_keluar;
		// 	//get nilai
		// 	//masukkin ke array
		// }

		
		// $chart1 = Charts::multi('line', 'chartjs')
  //           // Setup the chart settings
  //           ->title("Grafik Akreditasi")
  //           // A dimension of 0 means it will take 100% of the space
  //           ->dimensions(600, 300) // Width x Height
  //           // This defines a preset of colors already done:)
  //           ->template("material")
  //           // You could always set them manually
  //           // ->colors(['#2196F3', '#F44336', '#FFC107'])
  //           // Setup the diferent datasets (this is a multi chart)
  //           ->dataset('Tahun 1', [5,20,100])
  //           ->dataset('Tahun 2', [15,30,80])
  //           ->dataset('Tahun 3', [25,10,40])
  //           // Setup what the values mean
  //           ->labels(['one', 'Two', 'Three']);
  //           //->labels(['TS', 'TS-1', 'TS-3']);

            

            $chart2 = Charts::create('pie', 'chartjs')
            // Setup the chart settings
            ->title("Chart 2")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(200, 300) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->values([5,200,10])
           
            // Setup what the values mean
            ->labels(['One', 'Two', 'Three']);

           
             $array_pengembangan_dosen = array();

           
             foreach ($listProdi as $list) {
    			$kode_prodi = $list->kode_prodi;
    			$pensiun = count(Dosen::getDosenTetapSesuaiStatusPensiun($kode_prodi));
				$dosenBaru = count(Dosen::getDosenTetapSesuaiStatusDosenBaru($kode_prodi));
				$tugasBelajarS2 = count(Dosen::getDosenTetapSesuaiStatusTugasBelajarS2($kode_prodi));
				$tugasBelajarS3 = count(Dosen::getDosenTetapSesuaiStatusTugasBelajarS3($kode_prodi));
	   			$totalPensiun += $pensiun;
				$totalDosenBaru += $dosenBaru;
				$totalTugasBelajarS2 += $tugasBelajarS2;
				$totalTugasBelajarS3 += $tugasBelajarS3;
             }
           	
             //print_r($array_pengembangan_dosen);
            $chart3 = Charts::create('donut', 'chartjs')
            // Setup the chart settings
            ->title("Chart 3")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(300, 300) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->values([$totalPensiun,$totalDosenBaru,$totalTugasBelajarS2,$totalTugasBelajarS3])
           
            // Setup what the values mean
            ->labels(['Pensiun', 'Dosen Baru', 'Tugas Belajar S2', 'Tugas Belajar S3']);


            $chart4 = Charts::create('donut', 'chartjs')
            // Setup the chart settings
            ->title("Chart 4")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(200, 200) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->values([100,50,10])
           
            // Setup what the values mean
            ->labels(['One', 'Two', 'Three']);

          
            $chart1 = Charts::multi('bar', 'material')
                ->responsive(false)
                ->dimensions(0, 500)
                ->colors(['#ff0000', '#00ff00', '#0000ff'])
                ->labels(['2015', '2016', '2017'])
                ->dataset('Test 1', [1,2,3])
                ->dataset('Test 2', [0,6,0])
                ->dataset('Test 3', [3,4,1]);

			

			return view('viewriwayat',[
				'role' => $role,
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,       
	           // 'kodeFakultas' => $kodeFakultasPengguna,       
	            'kode_fakultas' => $kodeFakultasPengguna,       
	            'username' => $username,
	            'chart1' => $chart1,
	            'chart2' => $chart2,
	            'chart3' => $chart3,
	            'chart4' => $chart4,
	            //'chart5' => $chart5,
	            'getAllAkreditasi' => $getAllAkreditasi
	          //  'akreditasi' => $akreditasi
	         
			]);
	}

	public function formTambahAkreditasi(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$role=$request->session()->get('role');

		if ($role=='UPMAF' || $role=='Pimpinan Fakultas' || $role=='Admin') {
			$prodi = program_studi::getProdiByFakultas($kodeFakultasPengguna);				

			return view('formtambahakreditasi',[
				'role' => $role,
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'prodi' => $prodi,  
	            'username' => $username
			]);
		} else {
		return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $role,
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $username
			]);
		}

	}


	public function submitStatusAkreditasi(Request $request,$idHistori,$newStatus) {
		Akreditasi::updateStatus($idHistori,$newStatus);
		return redirect()->back();
	}

	public function lihatStatusBorang(Request $request) {

		$username=$request->session()->get('user');
		$pegawai = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$selectedProdi = 0;
		$getBorang;


		$role=$request->session()->get('role');

		if ($role=='Tim Akreditasi') {
			$timAkreditasi = Pegawai::getTimAkreditasi($username);		
			$selectedProdi=$timAkreditasi[0]->id_prodi_tim_akreditasi;
			$getBorang = Borang::getAllBorangByProdi($selectedProdi);
		} else if ($role=='Tim Reviewer') {
			$selectedProdi = Pegawai::lihatProdiTimReviewer($username);
			$getBorang = Borang::getAllBorangByProdi($selectedProdi);
		} else if($role == 'Admin') {
			$getBorang = Borang::getAllBorang();
		}

		return view('statusborang',[
			'role' => $role,
            'user' => $request->session()->get('user'),
            'pegawai' => $pegawai,              
            'kode_fakultas' => $kodeFakultasPengguna,       
            'username' => $username,
            'kodeProdi' => $selectedProdi,
            'getBorang' => $getBorang
		]);
	}


}

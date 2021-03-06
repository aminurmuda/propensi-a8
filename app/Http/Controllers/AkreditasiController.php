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
use App\danaProyek;
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
  		if ($role=='BPMA' || $role=='Admin' || $role=='Pimpinan Fakultas') {
  			$QAkreditasiProdi = Akreditasi::getAkreditasiById($idHistori);
  			$kodeProdi = $QAkreditasiProdi[0]->kode_prodi;
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

	public function submitAkreditasi($tahun,$kodeProdi, Request $request) {
		//munculin detail akreditasi : kode prodi, nama prodi, nama univ, nilai akreditasi, huruf akreditasi
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
    	$kodeFakultasPengguna= $QKodeFakultasPengguna[0]->kode_fakultas;

    	$role = $request->session()->get('role');

  		//validasi role. yang bisa edit akreditasi : BPMA
  		//validasi role. yang bisa edit akreditasi : BPMA dan admin
  		if ($role=='BPMA' || $role=='Admin' || $role=='Pimpinan Fakultas') {
  			
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

	  		$tahun_keluar = $request->get('tahun_keluar');
	  		$masa_berlaku = $request->get('masa_berlaku');
	  		// echo $tahun_keluar;
	  		// echo $masa_berlaku;
	  		// echo $kodeProdi;
			$QUpdateNilaiAkreditasi = Akreditasi::updateNilai($kodeProdi,$tahun,$tahun_keluar,$masa_berlaku, $nilai,$peringkat,$keterangan,6);
			$idHistori = Akreditasi::getIDAkreditasi($kodeProdi,$tahun_keluar)->id;
			// dd($QidHistori);
			$QupdateBorang = Borang::updateTahunBorang($idHistori,$tahun_keluar);


			return redirect()->route('akreditasi/riwayat'); //ke halaman histori akreditasi

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
  		if ($role=='UPMAF' || $role=='Admin') {
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
  			Borang::inisiasiBorang($kodeProdi,$tahun,$idHistori,'ED',0);


  			return redirect()->route('akreditasi/riwayat');

		} else {
		return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $request->session()->get('role'),
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $request->session()->get('user')
			]);
		}
	}

	public function lihatRiwayat(Request $request,$kodeFakultas) {
		$username=$request->session()->get('user');
		$kode_fakultas=$request->get('selectFakultasGeneral');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$role=$request->session()->get('role');
		if ($role=='Tim Akreditasi' || $role=='Tim Reviewer') {
			return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $role,
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $username
			]);
		}
		if($role == 'UPMAF' || $role=='Pimpinan Fakultas') {
			$getAllAkreditasi = Akreditasi::getAllAkreditasi($kodeFakultasPengguna);
			$getNamaFakultas = fakultas::getNamaFakultas($kodeFakultasPengguna)[0]->nama_fakultas;

		} elseif($role=='Pimpinan Universitas' || $role=='Admin'|| $role=='BPMA') {
			$getAllAkreditasi = Akreditasi::getAllAkreditasi($kode_fakultas);
			$getNamaFakultas = fakultas::getNamaFakultas($kode_fakultas)[0]->nama_fakultas;
		}
		
		//$akreditasi = Akreditasi::getAllAkreditasi($kode_fakultas);
		if ($request->get('tahun')){
			$tahun = $request->get('tahun'); 	
		} else {
			$tahun = date('Y');
		}


		$tahun1 = $tahun-1;
		$tahun2 = $tahun-2;

		if ($request->get('selectFakultasGeneral')){
			$selectedFakultas = $request->get('selectFakultasGeneral');
			$listProdi = program_studi::getProdiByFakultas($selectedFakultas);
			$jumlahProdi = count($listProdi); //menghitung jumlah prodi
		} else {
			$selectedFakultas = $kodeFakultasPengguna;
			$listProdi = program_studi::getProdiByFakultas($selectedFakultas);
			$jumlahProdi = count($listProdi); //menghtiung jumlah prodi
		}

		$fakultasnya = fakultas::getFakultasbyId($selectedFakultas);
		$namaFakultasnya = $fakultasnya[0]->nama_fakultas;


        $arrNamaProdi = [];
        $arrKodeProdi = [];
        $arrNilaiAkreditasi = [];
        foreach ($listProdi as $list2) {
        	$arrNamaProdi[] = $list2->nama_prodi;
        	$arrKodeProdi[] = $list2->kode_prodi;
        	$arrNilaiAkreditasi[] = Akreditasi::get3PerdiodeNilaiAkreditasi($list2->kode_prodi);
        }
        
        $jmlhProdi = count($listProdi);
        if($jmlhProdi==0) {
        	$chart1 = Charts::multi('line', 'highcharts')
			    ->title('Grafik Nilai Akreditasi Program Studi dalam 3 Periode Terakhir')
			    ->colors(['#E74C3C', '#2E86C1'])
			    ->labels(['Periode 1', 'Periode 2', 'Periode 3']);
			     

        } elseif($jmlhProdi==1) {
        	$arrNilaiAkreditasi1 = [];
        	for ($i=0; $i < 3 ; $i++) {
            	$arrNilaiAkreditasi1[$i] = $arrNilaiAkreditasi[0][$i]->nilai;
        	}
        	$chart1 = Charts::multi('line', 'highcharts')
			    ->title('Grafik Nilai Akreditasi Program Studi dalam 3 Periode Terakhir')
			     ->colors(['#E74C3C', '#2E86C1'])
			    ->labels(['Periode 1', 'Periode 2', 'Periode 3'])
			    ->dataset($arrNamaProdi[0], $arrNilaiAkreditasi1);

        } elseif($jmlhProdi==2) {
        	$arrNilaiAkreditasi1 = [];
       		$arrNilaiAkreditasi2 = [];
        	for ($i=0; $i < 3 ; $i++) {
            	$arrNilaiAkreditasi1[$i] = $arrNilaiAkreditasi[0][$i]->nilai;
            	$arrNilaiAkreditasi2[$i] = $arrNilaiAkreditasi[1][$i]->nilai;
        	}
        	$chart1 = Charts::multi('line', 'highcharts')
			    ->title('Grafik Nilai Akreditasi Program Studi dalam 3 Periode Terakhir')
			     ->colors(['#E74C3C', '#2E86C1'])
			    ->labels(['Periode 1', 'Periode 2', 'Periode 3'])
			    ->dataset($arrNamaProdi[0], $arrNilaiAkreditasi1)
			    ->dataset($arrNamaProdi[1],  $arrNilaiAkreditasi2);  

        } elseif($jmlhProdi==3) {
        	$arrNilaiAkreditasi1 = [];
       		$arrNilaiAkreditasi2 = [];
       		$arrNilaiAkreditasi3 = [];
        	for ($i=0; $i < 3 ; $i++) {
            	$arrNilaiAkreditasi1[$i] = $arrNilaiAkreditasi[0][$i]->nilai;
            	$arrNilaiAkreditasi2[$i] = $arrNilaiAkreditasi[1][$i]->nilai;
            	$arrNilaiAkreditasi3[$i] = $arrNilaiAkreditasi[2][$i]->nilai;
        	}
        	$chart1 = Charts::multi('line', 'highcharts')
			    ->title('Grafik Nilai Akreditasi Program Studi dalam 3 Periode Terakhir')
			     ->colors(['#E74C3C', '#2E86C1'])
			    ->labels(['Periode 1', 'Periode 2', 'Periode 3'])
			    ->dataset($arrNamaProdi[0], $arrNilaiAkreditasi1)
			    ->dataset($arrNamaProdi[1],  $arrNilaiAkreditasi2)
			    ->dataset($arrNamaProdi[2],  $arrNilaiAkreditasi3); 
		} elseif($jmlhProdi==4) {
        	$arrNilaiAkreditasi1 = [];
       		$arrNilaiAkreditasi2 = [];
       		$arrNilaiAkreditasi3 = [];
       		$arrNilaiAkreditasi4 = [];

        	for ($i=0; $i < 3 ; $i++) {
            	$arrNilaiAkreditasi1[$i] = $arrNilaiAkreditasi[0][$i]->nilai;
            	$arrNilaiAkreditasi2[$i] = $arrNilaiAkreditasi[1][$i]->nilai;
            	$arrNilaiAkreditasi3[$i] = $arrNilaiAkreditasi[2][$i]->nilai;
            	$arrNilaiAkreditasi4[$i] = $arrNilaiAkreditasi[3][$i]->nilai;
        	}
        	$chart1 = Charts::multi('line', 'highcharts')
			    ->title('Grafik Nilai Akreditasi Program Studi dalam 3 Periode Terakhir')
			     ->colors(['#E74C3C', '#2E86C1'])
			    ->labels(['Periode 1', 'Periode 2', 'Periode 3'])
			    ->dataset($arrNamaProdi[0], $arrNilaiAkreditasi1)
			    ->dataset($arrNamaProdi[1],  $arrNilaiAkreditasi2)
			    ->dataset($arrNamaProdi[2], $arrNilaiAkreditasi3)
			    ->dataset($arrNamaProdi[3],  $arrNilaiAkreditasi4); 
        } elseif($jmlhProdi==5) {
        	$arrNilaiAkreditasi1 = [];
       		$arrNilaiAkreditasi2 = [];
       		$arrNilaiAkreditasi3 = [];
       		$arrNilaiAkreditasi4 = [];
       		$arrNilaiAkreditasi5 = [];

        	for ($i=0; $i < 3 ; $i++) {
            	$arrNilaiAkreditasi1[$i] = $arrNilaiAkreditasi[0][$i]->nilai;
            	$arrNilaiAkreditasi2[$i] = $arrNilaiAkreditasi[1][$i]->nilai;
            	$arrNilaiAkreditasi3[$i] = $arrNilaiAkreditasi[2][$i]->nilai;
            	$arrNilaiAkreditasi4[$i] = $arrNilaiAkreditasi[3][$i]->nilai;
            	$arrNilaiAkreditasi5[$i] = $arrNilaiAkreditasi[4][$i]->nilai;
            	
        	}
        	$chart1 = Charts::multi('line', 'highcharts')
			    ->title('Grafik Nilai Akreditasi Program Studi dalam 3 Periode Terakhir')
			    ->dimensions(200,200)
			     ->colors(['#E74C3C', '#2E86C1'])
			    ->labels(['Periode 1', 'Periode 2', 'Periode 3'])
			    ->dataset($arrNamaProdi[0], $arrNilaiAkreditasi1)
			    ->dataset($arrNamaProdi[1],  $arrNilaiAkreditasi2)
			    ->dataset($arrNamaProdi[2], $arrNilaiAkreditasi3)
			    ->dataset($arrNamaProdi[3],  $arrNilaiAkreditasi4)
			    ->dataset($arrNamaProdi[4], $arrNilaiAkreditasi5); 
        } 
	
		return view('viewriwayat',[
			'role' => $role,
            'user' => $request->session()->get('user'),
            'pegawai' => $pimpinan,       
            'kode_fakultas' => $kodeFakultasPengguna,       
            'username' => $username,
            'chart1' => $chart1,
            'getAllAkreditasi' => $getAllAkreditasi,
            'nama_fakultas' => $getNamaFakultas,
            'getAllAkreditasi' => $getAllAkreditasi,
            'nama_fakultas' => $namaFakultasnya
		]);
	}

	public function formTambahAkreditasi(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$role=$request->session()->get('role');

		if ($role=='UPMAF'|| $role=='Admin') {
			$prodi = program_studi::getProdiByFakultas($kodeFakultasPengguna);				
			$tahun = date('Y');
			// echo $tahun;
			return view('formtambahakreditasi',[
				'role' => $role,
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'prodi' => $prodi,  
	            'username' => $username,
	            'tahun' => $tahun
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
		return redirect()->route('akreditasi/riwayat');
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
			// dd($getBorang);
		} else if ($role=='Tim Reviewer') {
			$idProdi = Pegawai::getIdProdiTimReviewer($username);
			$selectedProdi = Pegawai::lihatProdiTimReviewer($username);
			// dd($selectedProdi);
			$getBorang = Borang::getAllBorangByProdi($idProdi[0]->kode_prodi);
		} else if($role == 'Admin') {
			$getBorang = Borang::getAllBorang();
			// dd($getBorang);
		} else {
			return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $role,
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $username
			]);
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

	public function pilihJenisBorang(Request $request, $idHistori,$tahun) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$role=$request->session()->get('role');

		$QAkreditasiProdi = Akreditasi::getAkreditasiById($idHistori);
		// dd($QAkreditasiProdi);
  		$kodeProdi = $QAkreditasiProdi[0]->kode_prodi;
  		$tahun = $QAkreditasiProdi[0]->tahun_keluar;
  		$nama_prodi = $QAkreditasiProdi[0]->nama_prodi;
		
		

		$listProdi;
		$totalPensiun = 0;
		$totalDosenBaru = 0;
		$totalTugasBelajarS2 = 0;
		$totalTugasBelajarS3 = 0;
		$prestasi_lokal = 0;
		$prestasi_nasional = 0;
		$prestasi_internasional = 0;

		//$akreditasi = Akreditasi::getAllAkreditasi($kode_fakultas);
		$tahun = substr($tahun,0,4);
		$tahun1 = $tahun-1;
		$tahun2 = $tahun-2;
		// $tahun1 = $tahun-1;
		// $tahun2 = $tahun-2;

		if ($request->get('selectFakultasGeneral')){
			$selectedFakultas = $request->get('selectFakultasGeneral');
			$listProdi = program_studi::getProdiByFakultas($selectedFakultas);
			$jumlahProdi = count($listProdi); //menghitung jumlah prodi
		} else {
			$selectedFakultas = $kodeFakultasPengguna;
			$listProdi = program_studi::getProdiByFakultas($selectedFakultas);
			$jumlahProdi = count($listProdi); //menghtiung jumlah prodi
		}

		$fakultasnya = fakultas::getFakultasbyId($selectedFakultas);
		$namaFakultasnya = $fakultasnya[0]->nama_fakultas;

            
			$prestasi_dosen =dosen::getPrestasiDosen($kodeProdi,$tahun);
            
    
            foreach ($prestasi_dosen as $prestasi_dosen) {
            	$tingkat_prestasi = $prestasi_dosen ->tingkat;
            	if ($tingkat_prestasi=='Lokal') {
            		$prestasi_lokal=$prestasi_lokal+1;
            	}
            	else if ($tingkat_prestasi=='Nasional') {
            		$prestasi_nasional=$prestasi_nasional+1;
            	}
            	else{
            		$prestasi_internasional=$prestasi_internasional+1;
            	}
            }
            $chart2 = Charts::create('pie', 'c3')
            // Setup the chart settings
            ->title("Prestasi Dosen Tetap Sesuai PS")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(350, 250) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->values([$prestasi_lokal,$prestasi_nasional,$prestasi_internasional])
           
            // Setup what the values mean
            ->labels(['Lokal', 'Nasional', 'Internasional']);

           
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

           //ini untuk masukin data ke grafik terkait sumber pendanaan penelitian
        $dana_biayaSendiri = danaProyek::getDanaProyekBiayaSendiri($kodeProdi,$tahun);
		$arrA = array(0,0,0);
		foreach ($dana_biayaSendiri as $dana_biayaSendiri ) {
			$tahun_min = $dana_biayaSendiri->tanggal_selesai;
			if($tahun_min==($tahun-2)){
				$arrA[0]=$dana_biayaSendiri->dana_count;
			}
			elseif ($tahun_min==($tahun-1)) {
				$arrA[1]=$dana_biayaSendiri->dana_count;
			}
			elseif ($tahun_min==$tahun) {
				$arrA[2]=$dana_biayaSendiri->dana_count;
			}

		}
		$dana_PT = danaProyek::getDanaProyekPT($kodeProdi, $tahun);
		$arrB = array(0,0,0);
		foreach ($dana_PT as $dana_PT ) {
			$tahun_min = $dana_PT->tanggal_selesai;
			if($tahun_min==($tahun-2)){
				$arrB[0]=$dana_PT->dana_count;
			}
			elseif ($tahun_min==($tahun-1)) {
				$arrB[1]=$dana_PT->dana_count;
			}
			elseif ($tahun_min==$tahun) {
				$arrB[2]=$dana_PT->dana_count;
			}

		}
		$dana_depdiknas = danaProyek::getProyekDepdiknasDalamNegeri($kodeProdi,$tahun);
		$arrC = array(0,0,0);
		foreach ($dana_depdiknas as $dana_depdiknas ) {
			$tahun_min = $dana_depdiknas->tanggal_selesai;
			if($tahun_min==($tahun-2)){
				$arrC[0]=$dana_depdiknas->dana_count;
			}
			elseif ($tahun_min==($tahun-1)) {
				$arrC[1]=$dana_depdiknas->dana_count;
			}
			elseif ($tahun_min==$tahun) {
				$arrC[2]=$dana_depdiknas->dana_count;
			}

		}
		$dana_dalamNegeri = danaProyek::getDanaProyekInstitusiDalamNegeri($kodeProdi,$tahun);
		$arrD = array(0,0,0);
		foreach ($dana_dalamNegeri as $dana_dalamNegeri ) {
			$tahun_min = $dana_dalamNegeri->tanggal_selesai;
			if($tahun_min==($tahun-2)){
				$arrD[0]=$dana_dalamNegeri->dana_count;
			}
			elseif ($tahun_min==($tahun-1)) {
				$arrD[1]=$dana_dalamNegeri->dana_count;
			}
			elseif ($tahun_min==$tahun) {
				$arrD[2]=$dana_dalamNegeri->dana_count;
			}

		}
		$dana_luarNegeri = danaProyek::getDanaProyekInstitusiLuarNegeri($kodeProdi,$tahun);
		$arrE = array(0,0,0);
		foreach ($dana_luarNegeri as $dana_luarNegeri ) {
			$tahun_min = $dana_luarNegeri->tanggal_selesai;
			if($tahun_min==($tahun-2)){
				$arrE[0]=$dana_luarNegeri->dana_count;
			}
			elseif ($tahun_min==($tahun-1)) {
				$arrE[1]=$dana_luarNegeri->dana_count;
			}
			elseif ($tahun_min==$tahun) {
				$arrE[2]=$dana_luarNegeri->dana_count;
			}

		}
        
            $chart1 = Charts::multi('bar', 'material')
                ->responsive(false)
                ->dimensions(600, 250)
                ->title('Sumber Pembiayaan Penelitian Dosen Tetap sesuai PS')
                ->colors(['#d11141', '#00b159', '#00aedb', '#f37735', '#ffc425'])
                ->labels([$tahun2, $tahun1, $tahun])
                ->dataset('Pembiyaan sendiri oleh peneliti', $arrA)
                ->dataset('PT yang bersangkutan', $arrB)
                ->dataset('Depdiknas', $arrC)
                ->dataset('Institusi Dalam Negeri diluar Depdiknas', $arrD)
                ->dataset('Institusi Luar Negeri', $arrE);

			

			return view('dashboardprodi',[
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
	            'kode_prodi' => $kodeProdi,
	            'nama_prodi' => $nama_prodi,
	            'tahun' => $tahun,
	            'id_histori' => $idHistori
	         
	            //'chart5' => $chart5,
	          
	          //  'akreditasi' => $akreditasi
	         
			]);
	}


	public function homePimpinan(Request $request) {
		$username=$request->session()->get('user');
		$kode_fakultas=$request->get('selectFakultasGeneral');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$role=$request->session()->get('role');
		if ($role=='Tim Akreditasi' || $role=='Tim Reviewer') {
			return view('error', [
					'message' => 'Anda tidak memiliki akses ke dalam halaman ini',
					'role' => $role,
					'kode_fakultas' => $kodeFakultasPengguna,
					'user' => $username
			]);
		}
		if($role == 'UPMAF' || $role=='Pimpinan Fakultas') {
			$getAllAkreditasi = Akreditasi::getAllAkreditasi($kodeFakultasPengguna);
			$getNamaFakultas = fakultas::getNamaFakultas($kodeFakultasPengguna)[0]->nama_fakultas;

		} elseif($role=='Pimpinan Universitas' || $role=='Admin'|| $role=='BPMA') {
			$getAllAkreditasi = Akreditasi::getAllAkreditasi($kode_fakultas);
			$getNamaFakultas = fakultas::getNamaFakultas($kode_fakultas)[0]->nama_fakultas;
		}
		
		//$akreditasi = Akreditasi::getAllAkreditasi($kode_fakultas);

		if ($request->get('tahun')){
			$tahun = $request->get('tahun'); 	
		} else {
			$tahun = date('Y');
		}


		$tahun1 = $tahun-1;
		$tahun2 = $tahun-2;

		if ($request->get('selectFakultasGeneral')){
			$selectedFakultas = $request->get('selectFakultasGeneral');
			$listProdi = program_studi::getProdiByFakultas($selectedFakultas);
			$jumlahProdi = count($listProdi); //menghitung jumlah prodi
		} else {
			$selectedFakultas = $kodeFakultasPengguna;
			$listProdi = program_studi::getProdiByFakultas($selectedFakultas);
			$jumlahProdi = count($listProdi); //menghtiung jumlah prodi
		}

		$fakultasnya = fakultas::getFakultasbyId($selectedFakultas);
		$namaFakultasnya = $fakultasnya[0]->nama_fakultas;


        $arrNamaProdi = [];
        $arrKodeProdi = [];
        $arrNilaiAkreditasi = [];
        foreach ($listProdi as $list2) {
        	$arrNamaProdi[] = $list2->nama_prodi;
        	$arrKodeProdi[] = $list2->kode_prodi;
        	$arrNilaiAkreditasi[] = Akreditasi::get3PerdiodeNilaiAkreditasi($list2->kode_prodi);
        }
        
        $jmlhProdi = count($listProdi);
        if($jmlhProdi==0) {
        	$chart1 = Charts::multi('line', 'chartjs')
			    ->title('Grafik Nilai Akreditasi Program Studi dalam 3 Periode Terakhir')
			    ->colors(['#ff0000', '#808080'])
			    ->labels(['Periode 1', 'Periode 2', 'Periode 3']);
			     

        } elseif($jmlhProdi==1) {
        	$arrNilaiAkreditasi1 = [];
        	for ($i=0; $i < 3 ; $i++) {
            	$arrNilaiAkreditasi1[$i] = $arrNilaiAkreditasi[0][$i]->nilai;
        	}
        	$chart1 = Charts::multi('line', 'chartjs')
			    ->title('Grafik Nilai Akreditasi Program Studi dalam 3 Periode Terakhir')
			    ->colors(['#ff0000', '#808080'])
			    ->labels(['Periode 1', 'Periode 2', 'Periode 3'])
			    ->dataset($arrNamaProdi[0], $arrNilaiAkreditasi1);

        } elseif($jmlhProdi==2) {
        	$arrNilaiAkreditasi1 = [];
       		$arrNilaiAkreditasi2 = [];
        	for ($i=0; $i < 3 ; $i++) {
            	$arrNilaiAkreditasi1[$i] = $arrNilaiAkreditasi[0][$i]->nilai;
            	$arrNilaiAkreditasi2[$i] = $arrNilaiAkreditasi[1][$i]->nilai;
        	}
        	$chart1 = Charts::multi('line', 'chartjs')
			    ->title('Grafik Nilai Akreditasi Program Studi dalam 3 Periode Terakhir')
			    ->colors(['#ff0000', '#808080'])
			    ->labels(['Periode 1', 'Periode 2', 'Periode 3'])
			    ->dataset($arrNamaProdi[0], $arrNilaiAkreditasi1)
			    ->dataset($arrNamaProdi[1],  $arrNilaiAkreditasi2);  

        } elseif($jmlhProdi==3) {
        	$arrNilaiAkreditasi1 = [];
       		$arrNilaiAkreditasi2 = [];
       		$arrNilaiAkreditasi3 = [];
        	for ($i=0; $i < 3 ; $i++) {
            	$arrNilaiAkreditasi1[$i] = $arrNilaiAkreditasi[0][$i]->nilai;
            	$arrNilaiAkreditasi2[$i] = $arrNilaiAkreditasi[1][$i]->nilai;
            	$arrNilaiAkreditasi3[$i] = $arrNilaiAkreditasi[2][$i]->nilai;
        	}
        	$chart1 = Charts::multi('line', 'chartjs')
			    ->title('Grafik Nilai Akreditasi Program Studi dalam 3 Periode Terakhir')
			    ->colors(['#ff0000', '#ffffff'])
			    ->labels(['Periode 1', 'Periode 2', 'Periode 3'])
			    ->dataset($arrNamaProdi[0], $arrNilaiAkreditasi1)
			    ->dataset($arrNamaProdi[1],  $arrNilaiAkreditasi2)
			    ->dataset($arrNamaProdi[2],  $arrNilaiAkreditasi3); 
		} elseif($jmlhProdi==4) {
        	$arrNilaiAkreditasi1 = [];
       		$arrNilaiAkreditasi2 = [];
       		$arrNilaiAkreditasi3 = [];
       		$arrNilaiAkreditasi4 = [];

        	for ($i=0; $i < 3 ; $i++) {
            	$arrNilaiAkreditasi1[$i] = $arrNilaiAkreditasi[0][$i]->nilai;
            	$arrNilaiAkreditasi2[$i] = $arrNilaiAkreditasi[1][$i]->nilai;
            	$arrNilaiAkreditasi3[$i] = $arrNilaiAkreditasi[2][$i]->nilai;
            	$arrNilaiAkreditasi4[$i] = $arrNilaiAkreditasi[3][$i]->nilai;
        	}
        	$chart1 = Charts::multi('line', 'chartjs')
			    ->title('Grafik Nilai Akreditasi Program Studi dalam 3 Periode Terakhir')
			    ->colors(['#ff0000', '#ffffff'])
			    ->labels(['Periode 1', 'Periode 2', 'Periode 3'])
			    ->dataset($arrNamaProdi[0], $arrNilaiAkreditasi1)
			    ->dataset($arrNamaProdi[1],  $arrNilaiAkreditasi2)
			    ->dataset($arrNamaProdi[2], $arrNilaiAkreditasi3)
			    ->dataset($arrNamaProdi[3],  $arrNilaiAkreditasi4); 
        } elseif($jmlhProdi==5) {
        	$arrNilaiAkreditasi1 = [];
       		$arrNilaiAkreditasi2 = [];
       		$arrNilaiAkreditasi3 = [];
       		$arrNilaiAkreditasi4 = [];
       		$arrNilaiAkreditasi5 = [];

        	for ($i=0; $i < 3 ; $i++) {
            	$arrNilaiAkreditasi1[$i] = $arrNilaiAkreditasi[0][$i]->nilai;
            	$arrNilaiAkreditasi2[$i] = $arrNilaiAkreditasi[1][$i]->nilai;
            	$arrNilaiAkreditasi3[$i] = $arrNilaiAkreditasi[2][$i]->nilai;
            	$arrNilaiAkreditasi4[$i] = $arrNilaiAkreditasi[3][$i]->nilai;
            	$arrNilaiAkreditasi5[$i] = $arrNilaiAkreditasi[4][$i]->nilai;
            	
        	}
        	$chart1 = Charts::multi('line', 'chartjs')
			    ->title('Grafik Nilai Akreditasi Program Studi dalam 3 Periode Terakhir')
			    ->dimensions(200,200)
			    ->colors(['#1F618D', '#CB4335'])
			    ->labels(['Periode 1', 'Periode 2', 'Periode 3'])
			    ->dataset($arrNamaProdi[0], $arrNilaiAkreditasi1)
			    ->dataset($arrNamaProdi[1],  $arrNilaiAkreditasi2)
			    ->dataset($arrNamaProdi[2], $arrNilaiAkreditasi3)
			    ->dataset($arrNamaProdi[3],  $arrNilaiAkreditasi4)
			    ->dataset($arrNamaProdi[4], $arrNilaiAkreditasi5); 
        } 
		

		return view('homepimpinan',[
			'role' => $role,
            'user' => $request->session()->get('user'),
            'pegawai' => $pimpinan,       
            'kode_fakultas' => $kodeFakultasPengguna,       
            'username' => $username,
            'chart1' => $chart1,
            'getAllAkreditasi' => $getAllAkreditasi,
            'nama_fakultas' => $getNamaFakultas,
            'getAllAkreditasi' => $getAllAkreditasi,
            'nama_fakultas' => $namaFakultasnya
		]);
	}


	


}

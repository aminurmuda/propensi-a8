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
use App\Http\Requests;
use Charts;

class BorangController extends Controller
{
    public function _construct(){
        
    }

    public function pilihBorang3A(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$role=$request->session()->get('role');
			

			return view('pilihborang3a',[
				'role' => $role,
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,
	            'kodeFakultas' => $kodeFakultasPengguna,       
	           'kode_fakultas' => $kodeFakultasPengguna,       
	            'username' => $username
			]);
	}

	public function pilihBorang3B(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$role=$request->session()->get('role');
			

			return view('pilihborang3b',[
				'role' => $role,
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,       
	           'kodeFakultas' => $kodeFakultasPengguna,       
	           'kode_fakultas' => $kodeFakultasPengguna,       
	            'username' => $username
			]);
	}

	public function lihatEvaluasi(Request $request) {


		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login

		$role=$request->session()->get('role');
			

	

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
		if ($request->get('tahun')){
			$tahun = $request->get('tahun'); 	
		} else {
			$tahun = date('Y');
		}


			return view('viewevaluasi',[
				'role' => $role,
	            'user' => $request->session()->get('user'),

	            'pegawai' => $pimpinan,       
	           
	            'username' => $username,

	            'pegawai' => $pimpinan,      
	            'kode_fakultas' => $kodeFakultasPengguna,  
	            'username' => $username,
	            'evaluasiDiri' => $evaluasiDiri,
	            'kodeProdi' => $kodeProdi,
	            'prodiBorang' => $prodiBorang,
	            'tahun' => $tahun

			]);
	}

	public function lihatRiwayat(Request $request) {
		$username=$request->session()->get('user');
		$pimpinan = Pegawai::getPegawaiByUsername($username);
		$QKodeFakultasPengguna = Pegawai::getFakultasPegawai($request->session()->get('user'));
		$kodeFakultasPengguna=$QKodeFakultasPengguna[0]->kode_fakultas;	 //kode fakultas dari yang sedang login
		$role=$request->session()->get('role');

		$chart1 = Charts::multi('line', 'chartjs')
            // Setup the chart settings
            ->title("Grafik Akreditasi")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(500, 300) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->dataset('Tahun 1', [5,20,100])
            ->dataset('Tahun 2', [15,30,80])
            ->dataset('Tahun 3', [25,10,40])
            // Setup what the values mean
            ->labels(['One', 'Two', 'Three']);

            

            $chart2 = Charts::create('pie', 'chartjs')
            // Setup the chart settings
            ->title("Grafik Akreditasi")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(500, 200) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->values([5,20,100])
           
            // Setup what the values mean
            ->labels(['One', 'Two', 'Three']);


            $chart3 = Charts::create('donut', 'chartjs')
            // Setup the chart settings
            ->title("Grafik Akreditasi")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(500, 200) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->values([5,20,100])
           
            // Setup what the values mean
            ->labels(['One', 'Two', 'Three']);

          


			

			return view('viewriwayat',[
				'role' => $role,
	            'user' => $request->session()->get('user'),
	            'pegawai' => $pimpinan,       
	           'kodeFakultas' => $kodeFakultasPengguna,       
	           'kode_fakultas' => $kodeFakultasPengguna,       
	            'username' => $username,
	            'chart1' => $chart1,
	            'chart2' => $chart2,
	            'chart3' => $chart3
	         
			]);
	}
}


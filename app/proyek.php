<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;
use App\Pimpinan;
use App\dosen;
use DB;

class proyek extends Model
{
	 protected $table = 'proyek';

	  public static function getHasilPublikasiDosen($kode_prodi, $tahun)
    {
        $tahun_min = $tahun-3;
        return DB::table('proyek')
        	->join('dosen', 'proyek.id_dosen', '=', 'dosen.id_dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->select('proyek.nama', 'pegawai.nama as Pengaju', 'proyek.lokasi', 'proyek.tanggal_selesai','proyek.tingkat')
            //->where('year(CURRENT_DATE)','-','proyek.tanggal_selesai','<=',3) buat ngambil data 3 tahun terakhir
            //->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_kesesuaian',1)
            ->where('proyek.tanggal_selesai',"<=",$tahun)
            ->where('proyek.tanggal_selesai',">=",$tahun_min)
            ->get();

    }
    public static function getKaryaHAKI($kode_prodi, $tahun)
    {
         $tahun_min = $tahun-3;
    	return DB::table('proyek')
    	->join('jenis_luaran', 'proyek.id_jenis_luaran', '=', 'jenis_luaran.id')
    	->select('proyek.nama')
        //->where('dosen.kode_prodi_pengajaran',$kode_prodi)
    	->where('jenis_luaran.nama','Hak Kekayaan Intelektual')
        ->where('proyek.tanggal_selesai',"<=",$tahun)
        ->where('proyek.tanggal_selesai',">=",$tahun_min)
        ->get();
    }
    
}
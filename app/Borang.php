<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;
use App\Pimpinan;
use DB;

class borang extends Model
{
    protected $table = 'borang';
        /**
         * Method getFakultasPegawai untuk mendapatkan kode fakultas dari pegawai
         * 
         * @param string $username username pegawai yang akan diambil kode fakultasnya
         * @return kode fakultas dari pegawai
         */ 
        public static function getBorang($nomorStandar,$kode_prodi,$tahun)
    {
        return DB::table('borang')
            ->select('borang.isi')
            ->where('kode_prodi',$kode_prodi)
            ->where('tahun',$tahun)
            ->where('standar',$nomorStandar)
            ->get();
    }  

      public static function updateBorang($jenisBorang,$nomorStandar,$kode_prodi,$tahun,$isi)
    {
        return DB::table('borang')
            ->where('kode_prodi', $kode_prodi)
          ->where('tahun', $tahun)
          ->where('standar',$nomorStandar)
          ->where('jenis',$jenisBorang)
          ->update(['isi' => $isi]);
    } 

}

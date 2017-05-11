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
        public static function getBorang($jenisBorang,$nomorStandar,$kode_prodi,$tahun)
    {
        return DB::table('borang')
            ->select('borang.isi')
            ->where('kode_prodi',$kode_prodi)
            ->where('tahun',$tahun)
            ->where('standar',$nomorStandar)
            ->where('jenis',$jenisBorang)
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

    public static function inisiasiBorang($kodeProdi,$tahun,$idHistori,$kodeBorang,$standar) {
        $isi='';
        if ($kodeBorang=='3A' && $standar==2) {
          $isi = 'ini ceritanya json borang3A2';
        } else if ($kodeBorang=='3A' && $standar=='4') {
          $isi = 'ini ceritanya json borang3A4';
        } else if ($kodeBorang=='3A' && $standar=='7') {
          $isi = 'ini ceritanya json borang3A7';
        } else if ($kodeBorang=='3B' && $standar=='2') {
          $isi = 'ini ceritanya json borang3B2';
        } else if ($kodeBorang=='3B' && $standar=='4') {
          $isi = 'ini ceritanya json borang3B4';
        } else if ($kodeBorang=='3B' && $standar=='7') {
          $isi = 'ini ceritanya json borang3B7';
        } else if ($kodeBorang=='ED') {
          $isi = 'ini ceritanya json borangED';
        }

        if($kodeBorang!='ED') {
          return DB::table('borang')
                    ->insert(['kode_prodi'=> $kodeProdi, 'tahun' => $tahun, 'id_histori' => $idHistori,'jenis'=>$kodeBorang,'standar'=>$standar,'isi'=>$isi]);
        }

       return DB::table('borang')
                    ->insert(['kode_prodi'=> $kodeProdi, 'tahun' => $tahun, 'id_histori' => $idHistori,'jenis'=>$kodeBorang,'isi'=>$isi]);
    }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;
use App\Pimpinan;
use DB;

class dosen extends Model
{
    protected $table = 'histori_akreditasi';
        /**
         * Method getFakultasPegawai untuk mendapatkan kode fakultas dari pegawai
         * 
         * @param string $username username pegawai yang akan diambil kode fakultasnya
         * @return kode fakultas dari pegawai
         */ 
        public static function getAkreditasi($kode_prodi,$tahun)
    {
        return DB::table('histori_akreditasi')
            ->join('status', 'histori_akreditasi.status', '=', 'status.id')
            ->join('program_studi', 'histori_akreditasi.kode_prodi', '=', 'program_studi.kode_prodi')
            ->select('histori_akreditasi.*','status.nama', 'program_studi.nama_prodi')
            ->where('histori_akreditasi.kode_prodi',$kode_prodi)
            ->where('histori_akreditasi.tahun_keluar',$tahun)
            ->get();
    }

        public static function updateNilai($kode_prodi,$tahun,$nilai,$peringkat,$keterangan)
    {
        $masa_berlaku = $tahun+5;
        return DB::table('histori_akreditasi')
            ->where('kode_prodi', $kode_prodi)
          ->where('tahun', $tahun)
          ->update(['nilai' => $nilai,'peringkat' => $peringkat, 'masa_berlaku' => $masa_berlaku,'status' => 5,'keterangan' => $keterangan]);
    }    

}

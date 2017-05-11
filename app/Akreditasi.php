<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;
use App\Pimpinan;
use DB;

class Akreditasi extends Model
{
    protected $table = 'histori_akreditasi';
        /**
         * Method getFakultasPegawai untuk mendapatkan kode fakultas dari pegawai
         * 
         * @param string $username username pegawai yang akan diambil kode fakultasnya
         * @return kode fakultas dari pegawai
         */ 
        public static function getAkreditasi($tahun,$kode_prodi)
    {
        return DB::table('histori_akreditasi')
            ->join('status', 'histori_akreditasi.status', '=', 'status.id')
            ->join('program_studi', 'histori_akreditasi.kode_prodi', '=', 'program_studi.kode_prodi')
            ->join('fakultas','program_studi.kode_fakultas','=','fakultas.kode_fakultas')
            ->select('histori_akreditasi.*','status.nama as nama_status', 'program_studi.nama_prodi','fakultas.nama_fakultas')
            ->where('histori_akreditasi.kode_prodi',$kode_prodi)
            ->where('histori_akreditasi.tahun_keluar',$tahun)
            ->get();
    }

        public static function updateNilai($kode_prodi,$tahun,$nilai,$peringkat,$keterangan)
    {
        $masa_berlaku = $tahun+5;
        return DB::table('histori_akreditasi')
            ->where('kode_prodi', $kode_prodi)
          ->where('tahun_keluar', $tahun)
          ->update(['nilai' => $nilai,'peringkat_akreditasi' => $peringkat, 'masa_berlaku' => $masa_berlaku,'status' => 5,'keterangan' => $keterangan]);
    }    

    public static function tambahAkreditasi($kodeProdi,$tahun) {
        return DB::table('histori_akreditasi')
                    ->insert(['kode_prodi'=> $kodeProdi, 'tahun_keluar' => $tahun, 'status' => '1']);
    }

    public static function getIDAkreditasi($kodeProdi,$tahun) {
         return DB::table('histori_akreditasi')
            ->where('kode_prodi', $kodeProdi)
          ->where('tahun_keluar', $tahun)
          ->select('id')
          ->first();
    }

}

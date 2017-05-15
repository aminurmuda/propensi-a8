<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;
use App\Pimpinan;
use DB;

class Akreditasi extends Model
{
    protected $table = 'histori_akreditasi';

        public static function getAkreditasi($tahun,$kode_prodi)
    {
        return DB::table('histori_akreditasi')
            ->join('status', 'histori_akreditasi.status', '=', 'status.id')
            ->join('program_studi', 'histori_akreditasi.kode_prodi', '=', 'program_studi.kode_prodi')
            ->join('fakultas','program_studi.kode_fakultas','=','fakultas.kode_fakultas')
            ->select('histori_akreditasi.nilai','histori_akreditasi.peringkat_akreditasi','histori_akreditasi.keterangan','histori_akreditasi.tahun_keluar','histori_akreditasi.masa_berlaku','histori_akreditasi.status','status.nama as nama_status', 'program_studi.nama_prodi','fakultas.nama_fakultas')
            ->where('histori_akreditasi.kode_prodi',$kode_prodi)
            ->where('histori_akreditasi.tahun_keluar',$tahun)
            ->get();
    }

    public static function getAllAkreditasi($kode_fakultas)
    {
        return DB::table('histori_akreditasi')
            ->join('status', 'histori_akreditasi.status', '=', 'status.id')
            ->join('program_studi', 'histori_akreditasi.kode_prodi', '=', 'program_studi.kode_prodi')
          //  ->join('fakultas','program_studi.kode_fakultas','=','fakultas.kode_fakultas')
            ->select('histori_akreditasi.id','histori_akreditasi.nilai','histori_akreditasi.peringkat_akreditasi','histori_akreditasi.keterangan','histori_akreditasi.tahun_keluar','histori_akreditasi.masa_berlaku','status.nama as nama_status', 'program_studi.nama_prodi')
            ->where('program_studi.kode_fakultas',$kode_fakultas)
            ->get();
    }

        public static function updateNilai($kode_prodi,$tahun,$nilai,$peringkat,$keterangan)
    {
        $masa_berlaku = $tahun+5;
        return DB::table('histori_akreditasi')
            ->where('kode_prodi', $kode_prodi)
          ->where('tahun_keluar', $tahun)
          ->update(['nilai' => $nilai,'peringkat_akreditasi' => $peringkat, 'masa_berlaku' => $masa_berlaku,'status' => 8,'keterangan' => $keterangan]);
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

    public static function updateStatus($id_histori, $status) {
      return DB::table('histori_akreditasi')
            ->where('id', $id_histori)
          ->update(['status' => $status]);
    }

    public static function getAkreditasiById($id_histori)
    {
        return DB::table('histori_akreditasi')
            ->join('status', 'histori_akreditasi.status', '=', 'status.id')
            ->join('program_studi', 'histori_akreditasi.kode_prodi', '=', 'program_studi.kode_prodi')
            ->join('fakultas','program_studi.kode_fakultas','=','fakultas.kode_fakultas')
            ->select('histori_akreditasi.id','histori_akreditasi.nilai','histori_akreditasi.peringkat_akreditasi','histori_akreditasi.keterangan','histori_akreditasi.tahun_keluar','histori_akreditasi.masa_berlaku','histori_akreditasi.status','status.nama as nama_status', 'program_studi.nama_prodi','fakultas.nama_fakultas')
            ->where('histori_akreditasi.id',$id_histori)
            ->get();
    }
}

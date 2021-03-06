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
        $tahun = date('Y');
        DB::table('histori_akreditasi')
            ->where('masa_berlaku','<' ,$tahun)
          ->update(['status' => 7]);

        return DB::table('histori_akreditasi')
            ->join('status', 'histori_akreditasi.status', '=', 'status.id')
            ->join('program_studi', 'histori_akreditasi.kode_prodi', '=', 'program_studi.kode_prodi')
          //  ->join('fakultas','program_studi.kode_fakultas','=','fakultas.kode_fakultas')
            ->select('histori_akreditasi.id','histori_akreditasi.nilai','histori_akreditasi.peringkat_akreditasi','histori_akreditasi.keterangan','histori_akreditasi.tahun_keluar','histori_akreditasi.masa_berlaku','histori_akreditasi.status','status.nama as nama_status', 'program_studi.nama_prodi')
            ->where('program_studi.kode_fakultas',$kode_fakultas)
            ->get();
    }

    public static function get3PerdiodeNilaiAkreditasi($kode_prodi) {
        return DB::table('histori_akreditasi')
                ->select('nilai')
                ->where('kode_prodi', $kode_prodi)
                ->orderBy('tahun_keluar', 'asc')
                ->limit(3)
                ->get();
    }

    public static function updateNilai($kode_prodi,$tahun_lama,$tahun_keluar,$masa_berlaku,$nilai,$peringkat,$keterangan)
    {
        return DB::table('histori_akreditasi')
            ->where('kode_prodi', $kode_prodi)
          ->where('tahun_keluar', $tahun_lama)
          ->update(['nilai' => $nilai,'peringkat_akreditasi' => $peringkat, 'tahun_keluar' => $tahun_keluar, 'masa_berlaku' => $masa_berlaku,'status' => 6,'keterangan' => $keterangan]);
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
            ->select('histori_akreditasi.id','histori_akreditasi.nilai','histori_akreditasi.peringkat_akreditasi','histori_akreditasi.keterangan','histori_akreditasi.kode_prodi','histori_akreditasi.tahun_keluar','histori_akreditasi.masa_berlaku','histori_akreditasi.status','status.nama as nama_status', 'program_studi.nama_prodi','fakultas.nama_fakultas')
            ->where('histori_akreditasi.id',$id_histori)
            ->get();
    }
}

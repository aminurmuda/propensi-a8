<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;
use App\Pimpinan;
use DB;

class tendik extends Model
{
    protected $table = 'tendik';
        /**
         * Method getFakultasPegawai untuk mendapatkan kode fakultas dari pegawai
         * 
         * @param string $username username pegawai yang akan diambil kode fakultasnya
         * @return kode fakultas dari pegawai
         */ 
        public static function getPendidikanA($kode_prodi)
    {
        return DB::table('tendik')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'tendik.id_pegawai')
            ->join('riwayat_pendidikan', 'riwayat_pendidikan.id_pegawai', '=', 'pegawai.id_pegawai')
            ->join('jenis_tendik', 'tendik.id_jenis_tendik', '=', 'jenis_tendik.id_jenis_tendik')
            ->select('pegawai.nama','riwayat_pendidikan.riwayat_pendidikan','jenis_tendik.nama_jenis_tendik','jenis_tendik.unit_kerja')
            ->where('jenis_tendik.nama_jenis_tendik','Pustakawan')
            ->orderBy('riwayat_pendidikan.riwayat_pendidikan','desc')
            ->get();
    }  

        public static function getPendidikanB($kode_prodi)
    {
        return DB::table('tendik')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'tendik.id_pegawai')
            ->join('riwayat_pendidikan', 'riwayat_pendidikan.id_pegawai', '=', 'pegawai.id_pegawai')
            ->join('jenis_tendik', 'tendik.id_jenis_tendik', '=', 'jenis_tendik.id_jenis_tendik')
            ->select('pegawai.nama','riwayat_pendidikan.riwayat_pendidikan','jenis_tendik.nama_jenis_tendik','jenis_tendik.unit_kerja')
            ->where('jenis_tendik.nama_jenis_tendik','!=','Pustakawan')
            ->where('jenis_tendik.nama_jenis_tendik','!=','Administrasi')
            ->orderBy('riwayat_pendidikan.riwayat_pendidikan','desc')
            ->get();
    }    

    public static function getPendidikanC($kode_prodi)
    {
        return DB::table('tendik')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'tendik.id_pegawai')
            ->join('riwayat_pendidikan', 'riwayat_pendidikan.id_pegawai', '=', 'pegawai.id_pegawai')
            ->join('jenis_tendik', 'tendik.id_jenis_tendik', '=', 'jenis_tendik.id_jenis_tendik')
            ->select('pegawai.nama','riwayat_pendidikan.riwayat_pendidikan','jenis_tendik.nama_jenis_tendik','jenis_tendik.unit_kerja')
            ->where('jenis_tendik.nama_jenis_tendik','Administrasi')
            ->orderBy('riwayat_pendidikan.riwayat_pendidikan','desc')
            ->get();
    }
     public static function getPendidikanD($kode_fakultas)
    {
        return DB::table('tendik')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'tendik.id_pegawai')
            ->join('riwayat_pendidikan', 'riwayat_pendidikan.id_pegawai', '=', 'pegawai.id_pegawai')
            ->join('jenis_tendik', 'tendik.id_jenis_tendik', '=', 'jenis_tendik.id_jenis_tendik')
            ->join('program_studi', 'tendik.id_prodi', '=', 'program_studi.kode_prodi')
            ->select('pegawai.nama','riwayat_pendidikan.riwayat_pendidikan','jenis_tendik.nama_jenis_tendik','jenis_tendik.unit_kerja')
            ->where('jenis_tendik.nama_jenis_tendik','Pustakawan')
            ->where('program_studi.kode_fakultas', $kode_fakultas)
            ->orderBy('riwayat_pendidikan.riwayat_pendidikan','desc')
            ->get();
    }  

        public static function getPendidikanE($kode_fakultas)
    {
        return DB::table('tendik')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'tendik.id_pegawai')
            ->join('riwayat_pendidikan', 'riwayat_pendidikan.id_pegawai', '=', 'pegawai.id_pegawai')
            ->join('jenis_tendik', 'tendik.id_jenis_tendik', '=', 'jenis_tendik.id_jenis_tendik')
            ->join('program_studi', 'tendik.id_prodi', '=', 'program_studi.kode_prodi')
            ->select('pegawai.nama','riwayat_pendidikan.riwayat_pendidikan','jenis_tendik.nama_jenis_tendik','jenis_tendik.unit_kerja')
            ->where('jenis_tendik.nama_jenis_tendik','!=','Pustakawan')
            ->where('jenis_tendik.nama_jenis_tendik','!=','Administrasi')
            ->where('program_studi.kode_fakultas', $kode_fakultas)
            ->orderBy('riwayat_pendidikan.riwayat_pendidikan','desc')
            ->get();
    }    

    public static function getPendidikanF($kode_fakultas)
    {
        return DB::table('tendik')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'tendik.id_pegawai')
            ->join('riwayat_pendidikan', 'riwayat_pendidikan.id_pegawai', '=', 'pegawai.id_pegawai')
            ->join('jenis_tendik', 'tendik.id_jenis_tendik', '=', 'jenis_tendik.id_jenis_tendik')
            ->join('program_studi', 'tendik.id_prodi', '=', 'program_studi.kode_prodi')
            ->select('pegawai.nama','riwayat_pendidikan.riwayat_pendidikan','jenis_tendik.nama_jenis_tendik','jenis_tendik.unit_kerja')
            ->where('jenis_tendik.nama_jenis_tendik','Administrasi')
            ->where('program_studi.kode_fakultas', $kode_fakultas)
            ->orderBy('riwayat_pendidikan.riwayat_pendidikan','desc')
            ->get();
    } 
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;
use App\Pimpinan;
use DB;

class dosen extends Model
{
    protected $table = 'dosen';
        /**
         * Method getFakultasPegawai untuk mendapatkan kode fakultas dari pegawai
         * 
         * @param string $username username pegawai yang akan diambil kode fakultasnya
         * @return kode fakultas dari pegawai
         */ 
        public static function getOrganisasiDosen($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('organisasi_dosen', 'organisasi_dosen.id_dosen', '=', 'dosen.id_dosen')
            ->select('pegawai.nama as namaPegawai','organisasi_dosen.nama', 'organisasi_dosen.kurun_waktu','organisasi_dosen.tingkat')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->get();
    }

       /**
         * Method getFakultasPegawai untuk mendapatkan kode fakultas dari pegawai
         * 
         * @param string $username username pegawai yang akan diambil kode fakultasnya
         * @return kode fakultas dari pegawai
         */ 
        public static function getPrestasiDosen($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('prestasi_dosen', 'prestasi_dosen.id_dosen', '=', 'dosen.id_dosen')
            ->select('pegawai.nama as namaPegawai','prestasi_dosen.nama', 'prestasi_dosen.waktu','prestasi_dosen.tingkat')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->get();
    }

       /**
         * Method getFakultasPegawai untuk mendapatkan kode fakultas dari pegawai
         * 
         * @param string $username username pegawai yang akan diambil kode fakultasnya
         * @return kode fakultas dari pegawai
         */ 
        public static function getKegiatanDosen($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('kegiatan_dosen', 'kegiatan_dosen.id_dosen', '=', 'dosen.id_dosen')
            ->select('pegawai.nama as namaPegawai','kegiatan_dosen.jenis', 'kegiatan_dosen.nama_kegiatan','kegiatan_dosen.tempat','kegiatan_dosen.waktu','kegiatan_dosen.peran')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('dosen.flag_kesesuaian',1)
            ->get();
    }  

        public static function getProgramDosen($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('program_tugas_dosen', 'program_tugas_dosen.id_dosen', '=', 'dosen.id_dosen')
            ->select('pegawai.nama as namaPegawai','program_tugas_dosen.*')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->get();
    } 

            public static function getDosenTidakTetap($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('riwayat_pendidikan', 'pegawai.id_pegawai', '=', 'riwayat_pendidikan.id_pegawai')
            ->join('jabatan_struktural', 'jabatan_struktural.id', '=', 'pegawai.id_jabatan_struktural')
            ->select('pegawai.nama as namaPegawai','dosen.NIDN','pegawai.tanggal_lahir','jabatan_struktural.nama','riwayat_pendidikan.riwayat_pendidikan','riwayat_pendidikan.gelar_pendidikan','riwayat_pendidikan.instansi_pendidikan')
            ->where('dosen.isDosenTetap',0)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->get();
    }   

            public static function getDosenTetapSesuai($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('riwayat_pendidikan', 'pegawai.id_pegawai', '=', 'riwayat_pendidikan.id_pegawai')
            ->join('jabatan_struktural', 'jabatan_struktural.id', '=', 'pegawai.id_jabatan_struktural')
            ->select('pegawai.nama as namaPegawai','dosen.NIDN','pegawai.tanggal_lahir','jabatan_struktural.nama','riwayat_pendidikan.riwayat_pendidikan','riwayat_pendidikan.gelar_pendidikan','riwayat_pendidikan.instansi_pendidikan','dosen.bidang_keahlian')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('dosen.flag_kesesuaian',1)
            ->get();
    }  

            public static function getDosenTetapTidakSesuai($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('riwayat_pendidikan', 'pegawai.id_pegawai', '=', 'riwayat_pendidikan.id_pegawai')
            ->join('jabatan_struktural', 'jabatan_struktural.id', '=', 'pegawai.id_jabatan_struktural')
            ->select('pegawai.nama as namaPegawai','dosen.NIDN','pegawai.tanggal_lahir','jabatan_struktural.nama','riwayat_pendidikan.riwayat_pendidikan','riwayat_pendidikan.gelar_pendidikan','riwayat_pendidikan.instansi_pendidikan','dosen.bidang_keahlian')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('dosen.flag_kesesuaian',0)
            ->get();
    }            

}

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

}

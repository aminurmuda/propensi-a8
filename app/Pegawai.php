<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;
use DB;

class Pegawai extends Model
{
    protected $table = 'pegawai';

    public static function getPegawaiByUsername($username)
    {
    	return Pegawai::where('username', $username)->first();
    }

    public static function getTimAkreditasiByProdi($kode_prodi)
    {
    	return DB::table('pegawai')
            ->join('dosen', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->select('pegawai.nama', 'pegawai.no_pegawai')
            ->where('pegawai.isTimAkreditasi',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->get();;
    }

}

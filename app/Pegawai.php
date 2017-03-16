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
        return $pegawai = Pegawai::where('username', $username)->first();
    }


    public static function getPegawaiIsPimpinan($username) {
    	$pegawai = Pegawai::getPegawaiByUsername($username);
    	if($pegawai->isPimpinan == 1){
    		return true;
    	}
    	return false;
    }

    public static function getPegawaiIsTimAkreditasi($username) {
    	$pegawai = Pegawai::getPegawaiByUsername($username);
    	if($pegawai->isTimAkreditasi == 1){
    		return true;
    	}
    	return false;
    }
    
    public static function getTimAkreditasiByProdi($kode_prodi)
    {
        return DB::table('pegawai')
            ->join('dosen', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->select('pegawai.nama', 'pegawai.no_pegawai')
            ->where('pegawai.isTimAkreditasi',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->get();
    }
    public static function deleteTimAkreditasi($username) {
        return DB::table('pegawai')
                    ->where('username', $username)
                    ->update(['isTimAkreditasi'=> 0]);
    }

    public static function addTimAkreditasi($username) {
        return Pegawai::where('username', $username)
                    ->update(['isTimAkreditasi' => 1]);
    }

    public static function getAllPegawaiIsNotTimAkreditasi($kode_fakultas){
        return DB::table('pegawai')
            ->join('dosen', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('program_studi', 'program_studi.kode_prodi', '=', 'dosen.kode_prodi_pengajaran')
            ->select('pegawai.nama', 'pegawai.no_pegawai')
            ->where('pegawai.isTimAkreditasi',0)
            ->where('program_studi.kode_fakultas',$kode_fakultas)
            ->get();
    }

    public static function getPegawaiIsNotTimAkreditasiByUsername($username){
        return Pegawai::where('isTimAkreditasi', 0)
                        ->where('username', $username);
    }

    public static function getPegawaiIsNotTimAkreditasiByNIP($no_pegawai){
        return Pegawai::where('isTimAkreditasi', 0)
                        ->where('no_pegawai', $no_pegawai);
    }

    public static function getTimAkreditasiByFakultas($kode_fakultas)
    {
        return DB::table('pegawai')
            ->join('dosen', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('program_studi', 'program_studi.kode_prodi', '=', 'dosen.kode_prodi_pengajaran')
            ->select('pegawai.nama', 'pegawai.no_pegawai')
            ->where('pegawai.isTimAkreditasi',1)
            ->where('program_studi.kode_fakultas',$kode_fakultas)
            ->get();
    }
}

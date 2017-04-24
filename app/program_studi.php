<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\program_studi;
use DB;

class program_studi extends Model
{
    protected $table = 'program_studi';

    /**
     * Method getPegawaiByUsername untuk mendapatkan pegawai dengan username tertentu
     * 
     * @param string $username username pegawai yang ingin dicari
     * @return Pegawai model
     */
    public static function getAllProdi()
    {
        return DB::table('program_studi')->get();
        
    }

    public static function getProdiByFakultas($kode_fakultas)
    {
        return DB::table('program_studi')
        ->where('kode_fakultas',$kode_fakultas)
        ->get();
    }

        public static function getProdi($kode_prodi)
    {
        return DB::table('program_studi')
        ->where('kode_prodi',$kode_prodi)
        ->first();
    }

    

}

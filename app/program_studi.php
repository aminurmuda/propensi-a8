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

    public static function getAllProdiByKodeFakultas($kode_fakultas)
    {
        return DB::table('program_studi')
            ->select('program_studi.kode_prodi', 'program_studi.nama_prodi')
            ->where('kode_fakultas',$kode_fakultas)
            ->get();
        
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\fakultas;
use DB;

class fakultas extends Model
{
    protected $table = 'fakultas';

    /**
     * Method getPegawaiByUsername untuk mendapatkan pegawai dengan username tertentu
     * 
     * @param string $username username pegawai yang ingin dicari
     * @return Pegawai model
     */
    public static function getAllFakultas()
    {
        return DB::table('fakultas')->get();
    }

}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;

class Pegawai extends Model
{
    protected $table = 'pegawai';

    public static function getPegawaiByUsername($username)
    {
    	return Pegawai::where('username', $username)->first();
    }
}

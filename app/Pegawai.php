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
}

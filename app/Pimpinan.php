<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;
use DB;

class Pimpinan extends Model
{
    protected $table = 'pimpinan';

    public static function setAktifPimpinanIsBPMA($id_pimpinan) {
    	return DB::table('pimpinan')
                    ->where('id_pimpinan', $id_pimpinan)
                    ->update(['isBPMA'=> 1, 'isPimpinanFakultas' => 0, 'isPimpinanUniv' => 0]);
    }

    public static function setAktifPimpinanIsPimpinanFakultas($id_pimpinan, $username) {
    	$kodeFakultas=getFakultasPegawai($username);
    	return DB::table('pimpinan')
                    ->where('id_pimpinan', $id_pimpinan)
                    ->update(['isBPMA'=> 0, 'isPimpinanFakultas' => 1, 'isPimpinanUniv' => 0, 'id_fakultas' => $kodeFakultas]);
    }

    public static function setAktifPimpinanIsPimpinanUniv($id_pimpinan) {
    	return DB::table('pimpinan')
                    ->where('id_pimpinan', $id_pimpinan)
                    ->update(['isBPMA'=> 0, 'isPimpinanFakultas' => 0, 'isPimpinanUniv' => 1, 'id_fakultas' => null]);
    }

    public static function setGeneralPimpinan($id_pimpinan, $valuePimpinan, $username) {
    	if($valuePimpinan == 1) {
    		return Pimpinan::setAktifPimpinanIsBPMA($id_pimpinan);
    	} elseif($valuePimpinan == 2) {
    		return Pimpinan::setAktifPimpinanIsPimpinanFakultas($id_pimpinan, $username);
    	} else {
    		return Pimpinan::setAktifPimpinanIsPimpinanUniv($id_pimpinan);
    	}
    }

}

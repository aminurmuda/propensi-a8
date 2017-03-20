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
    	$kodeFakultas= Pegawai::getFakultasPegawai($username);
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

    public static function tambahPimpinanIsBPMA($username) {
    	$kodeFakultas = Pegawai::getFakultasPegawai($username);
    	return DB::table('pimpinan')
                    ->insert(['isBPMA'=> 1, 'isPimpinanFakultas' => 0, 'id_fakultas' => $kodeFakultas[0]->kode_fakultas, 'isPimpinanUniv' => 0]);
    }

    public static function tambahPimpinanIsPimpinanFakultas($username) {
    	$kodeFakultas= Pegawai::getFakultasPegawai($username);

    	return DB::table('pimpinan')
                    ->insert(['isBPMA'=> 0, 'isPimpinanFakultas' => 1, 'id_fakultas' => $kodeFakultas[0]->kode_fakultas, 'isPimpinanUniv' => 0]);
    }

    public static function tambahPimpinanIsPimpinanUniv() {
    	return DB::table('pimpinan')
                   ->insert(['isBPMA'=> 0, 'isPimpinanFakultas' => 0, 'id_fakultas' => null, 'isPimpinanUniv' => 1]);
    }

    public static function addPimpinan($valuePimpinan, $username) {
    	if($valuePimpinan == 1) {
    		return Pimpinan::tambahPimpinanIsBPMA($username);
    	} elseif($valuePimpinan == 2) {
    		return Pimpinan::tambahPimpinanIsPimpinanFakultas($username);
    	} else {
    		return Pimpinan::tambahPimpinanIsPimpinanUniv();
    	}
    }

    public static function hapusPimpinan($id_pimpinan) {
    	return DB::table('pimpinan')
                    ->where('id_pimpinan', $id_pimpinan)
                    ->update(['isBPMA'=> 0, 'isPimpinanFakultas' => 0, 	'isPimpinanUniv' => 0]);
    }

    public static function getIdPimpinanTerakhir() {
    	$idPimpinan = Pimpinan::select('id_pimpinan')
    							->orderBy('id_pimpinan', 'desc')->first();
    	return $idPimpinan->id_pimpinan;
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;
use App\Pimpinan;
use App\dosen;
use App\kerja_sama;
use App\program_studi;
use DB;

class danaPengmas extends Model
{
	protected $table = 'evaluasi_dana_pengmas';
	public static function getDanaBiayaSendiri($kode_prodi,$tahun)
    {
    	$tahun_min=$tahun-2;
    	return DB::table('evaluasi_dana_pengmas')
    	->join('pengmas_dosen', 'evaluasi_dana_pengmas.id_pengmas','=','pengmas_dosen.id_pengmas')
        ->join('dosen', 'pengmas_dosen.id_dosen','=','dosen.id_dosen')
    	->select(DB::raw('count(*) as dana_count', 'pengmas_dosen.tahun'))
    	->where('evaluasi_dana_pengmas.dana_pribadi','!=', 0)
        ->where('dosen.kode_prodi_pengajaran','=',$kode_prodi)
    	->where('pengmas_dosen.tahun','<=', $tahun)
        ->where('pengmas_dosen.tahun','>=', $tahun_min)
    	->groupBy('pengmas_dosen.tahun')
    	->get();		
    }
	public static function getDanaPT($kode_prodi,$tahun)
    {
    	$tahun_min=$tahun-2;
    	return DB::table('evaluasi_dana_pengmas')
    	->join('pengmas_dosen', 'evaluasi_dana_pengmas.id_pengmas','=','pengmas_dosen.id_pengmas')
        ->join('dosen', 'pengmas_dosen.id_dosen','=','dosen.id_dosen')
    	->select(DB::raw('count(*) as dana_count', 'pengmas_dosen.tahun'))
    	->where('dosen.kode_prodi_pengajaran','=',$kode_prodi)
        ->where('evaluasi_dana_pengmas.dana_pt','!=', 0)
    	->where('pengmas_dosen.tahun','<=', $tahun)
        ->where('pengmas_dosen.tahun','>=', $tahun_min)
    	->groupBy('pengmas_dosen.tahun')
    	->get();		
    }
	 public static function getDanaInstitusiDalamNegeri($kode_prodi,$tahun)
    {
    	$tahun_min=$tahun-2;
    	return DB::table('evaluasi_dana_pengmas')
    	->join('pengmas_dosen', 'evaluasi_dana_pengmas.id_pengmas','=','pengmas_dosen.id_pengmas')
    	->join('dosen', 'pengmas_dosen.id_dosen','=','dosen.id_dosen')
        ->select(DB::raw('count(*) as dana_count', 'pengmas_dosen.tahun'))
    	->where('evaluasi_dana_pengmas.dana_institusi_dalam_negeri','!=', 0)
    	->where('pengmas_dosen.tahun','<=', $tahun)
        ->where('pengmas_dosen.tahun','>=', $tahun_min)
    	->groupBy('pengmas_dosen.tahun')
    	->get();		
    }
     public static function getDanaInstitusiLuarNegeri($kode_prodi,$tahun)
    {
    	$tahun_min=$tahun-2;
    	return DB::table('evaluasi_dana_pengmas')
    	->join('pengmas_dosen', 'evaluasi_dana_pengmas.id_pengmas','=','pengmas_dosen.id_pengmas')
    	->join('dosen', 'pengmas_dosen.id_dosen','=','dosen.id_dosen')
        ->select(DB::raw('count(*) as dana_count', 'pengmas_dosen.tahun'))
    	->where('evaluasi_dana_pengmas.dana_institusi_luar_negeri','!=', 0)
    	->where('dosen.kode_prodi_pengajaran','=',$kode_prodi)
        ->where('pengmas_dosen.tahun','<=', $tahun)
        ->where('pengmas_dosen.tahun','>=', $tahun_min)
    	->groupBy('pengmas_dosen.tahun')
    	->get();		
    }
     public static function getDanaDepdiknasDalamNegeri($kode_prodi,$tahun)
    {
    	$tahun_min=$tahun-2;
    	return DB::table('evaluasi_dana_pengmas')
    	->join('pengmas_dosen', 'evaluasi_dana_pengmas.id_pengmas','=','pengmas_dosen.id_pengmas')
    	->join('dosen', 'pengmas_dosen.id_dosen','=','dosen.id_dosen')
        ->select(DB::raw('count(*) as dana_count', 'pengmas_dosen.tahun'))
    	->where('evaluasi_dana_pengmas.dana_depdiknas_dalam_negeri','!=', 0)
    	->where('dosen.kode_prodi_pengajaran','=',$kode_prodi)
        ->where('pengmas_dosen.tahun','<=', $tahun)
        ->where('pengmas_dosen.tahun','>=', $tahun_min)
    	->groupBy('pengmas_dosen.tahun')
    	->get();		
    }
}
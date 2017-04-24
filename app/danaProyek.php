<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;
use App\Pimpinan;
use App\dosen;
use App\kerja_sama;
use App\program_studi;
use App\proyek;
use DB;

class danaProyek extends Model
{
	protected $table = 'evaluasi_dana_akhir';
	public static function getDanaProyekBiayaSendiri($kode_prodi,$tahun)
    {
    	$tahun_min=$tahun-2;
    	return DB::table('evaluasi_dana_akhir')
    	->join('proyek', 'evaluasi_dana_akhir.id_proyek','=','proyek.id')
        ->join('dosen', 'proyek.id_dosen','=','dosen.id_dosen')
    	->select(DB::raw('count(*) as dana_count, proyek.tanggal_selesai'))
    	->where('evaluasi_dana_akhir.dana_pribadi','!=', 0)
        ->where('dosen.kode_prodi_pengajaran','=',$kode_prodi)
    	->where('proyek.tanggal_selesai','<=', $tahun)
        ->where('proyek.tanggal_selesai','>=', $tahun_min)
    	->groupBy('proyek.tanggal_selesai')
    	->get();		
    }
	public static function getDanaProyekPT($kode_prodi,$tahun)
    {
    	$tahun_min=$tahun-2;
    	return DB::table('evaluasi_dana_pengmas')
    	->join('pengmas_dosen', 'evaluasi_dana_pengmas.id_pengmas','=','pengmas_dosen.id_pengmas')
        ->join('dosen', 'pengmas_dosen.id_dosen','=','dosen.id_dosen')
    	->select(DB::raw('count(*) as dana_count, pengmas_dosen.tahun'))
    	->where('dosen.kode_prodi_pengajaran','=',$kode_prodi)
        ->where('evaluasi_dana_pengmas.dana_pt','!=', 0)
    	->where('pengmas_dosen.tahun','<=', $tahun)
        ->where('pengmas_dosen.tahun','>=', $tahun_min)
    	->groupBy('pengmas_dosen.tahun')
    	->get();		
    }
	 public static function getDanaProyekInstitusiDalamNegeri($kode_prodi,$tahun)
    {
    	$tahun_min=$tahun-2;
    	return DB::table('evaluasi_dana_pengmas')
    	->join('pengmas_dosen', 'evaluasi_dana_pengmas.id_pengmas','=','pengmas_dosen.id_pengmas')
    	->join('dosen', 'pengmas_dosen.id_dosen','=','dosen.id_dosen')
        ->select(DB::raw('count(*) as dana_count, pengmas_dosen.tahun'))
    	->where('evaluasi_dana_pengmas.dana_institusi_dalam_negeri','!=', 0)
    	->where('pengmas_dosen.tahun','<=', $tahun)
        ->where('pengmas_dosen.tahun','>=', $tahun_min)
    	->groupBy('pengmas_dosen.tahun')
    	->get();		
    }
     public static function getDanaProyekInstitusiLuarNegeri($kode_prodi,$tahun)
    {
    	$tahun_min=$tahun-2;
    	return DB::table('evaluasi_dana_pengmas')
    	->join('pengmas_dosen', 'evaluasi_dana_pengmas.id_pengmas','=','pengmas_dosen.id_pengmas')
    	->join('dosen', 'pengmas_dosen.id_dosen','=','dosen.id_dosen')
        ->select(DB::raw('count(*) as dana_count, pengmas_dosen.tahun'))
    	->where('evaluasi_dana_pengmas.dana_institusi_luar_negeri','!=', 0)
    	->where('dosen.kode_prodi_pengajaran','=',$kode_prodi)
        ->where('pengmas_dosen.tahun','<=', $tahun)
        ->where('pengmas_dosen.tahun','>=', $tahun_min)
    	->groupBy('pengmas_dosen.tahun')
    	->get();		
    }
     public static function getProyekDepdiknasDalamNegeri($kode_prodi,$tahun)
    {
    	$tahun_min=$tahun-2;
    	return DB::table('evaluasi_dana_pengmas')
    	->join('pengmas_dosen', 'evaluasi_dana_pengmas.id_pengmas','=','pengmas_dosen.id_pengmas')
    	->join('dosen', 'pengmas_dosen.id_dosen','=','dosen.id_dosen')
        ->select(DB::raw('count(*) as dana_count, pengmas_dosen.tahun'))
    	->where('evaluasi_dana_pengmas.dana_depdiknas_dalam_negeri','!=', 0)
    	->where('dosen.kode_prodi_pengajaran','=',$kode_prodi)
        ->where('pengmas_dosen.tahun','<=', $tahun)
        ->where('pengmas_dosen.tahun','>=', $tahun_min)
    	->groupBy('pengmas_dosen.tahun')
    	->get();		
    }
}s
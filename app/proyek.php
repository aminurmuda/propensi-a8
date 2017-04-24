<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;
use App\Pimpinan;
use App\dosen;
use DB;

class proyek extends Model
{
	 protected $table = 'proyek';

	  public static function getHasilPublikasiDosen($kode_prodi, $tahun)
    {
        $tahun_min = $tahun-3;
        return DB::table('proyek')
        	->join('dosen', 'proyek.id_dosen', '=', 'dosen.id_dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->select('proyek.nama', 'pegawai.nama as Pengaju', 'proyek.lokasi', 'proyek.tanggal_selesai','proyek.tingkat')
            //->where('year(CURRENT_DATE)','-','proyek.tanggal_selesai','<=',3) buat ngambil data 3 tahun terakhir
            //->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_kesesuaian',1)
            ->where('proyek.tanggal_selesai',"<=",$tahun)
            ->where('proyek.tanggal_selesai',">=",$tahun_min)
            ->get();

    }
    public static function getKaryaHAKI($kode_prodi, $tahun)
    {
         $tahun_min = $tahun-3;
    	return DB::table('proyek')
    	->join('jenis_luaran', 'proyek.id_jenis_luaran', '=', 'jenis_luaran.id')
    	->select('proyek.nama')
        //->where('dosen.kode_prodi_pengajaran',$kode_prodi)
    	->where('jenis_luaran.nama','Hak Kekayaan Intelektual')
        ->where('proyek.tanggal_selesai',"<=",$tahun)
        ->where('proyek.tanggal_selesai',">=",$tahun_min)
        ->get();
    }

    public static function getProyek($kode_prodi, $tahun)
    {
        return DB::table('proyek')
        ->join('dosen', 'proyek.id_dosen', '=', 'dosen.id_dosen')
        ->join('pegawai', 'dosen.id_pegawai', '=', 'pegawai.id_pegawai')
        ->select('proyek.id', 'proyek.nama', 'proyek.tanggal_selesai', 'dosen.id_dosen', 'pegawai.id_pegawai', 'pegawai.nama')
        ->where('dosen.kode_prodi_pengajaran', $kode_prodi)
        ->where('proyek.tanggal_selesai', '=', $tahun)
        ->get();
    }

    public static function getTotalDanaPenelitian($kode_prodi, $tahun)
    {
        $totalDanaPenelitian = 0;
        $danaDepdiknasDalamNegeri = DB::table('proyek')
            ->join('dosen', 'proyek.id_dosen', '=', 'dosen.id_dosen')
            ->join('pegawai', 'dosen.id_pegawai', '=', 'pegawai.id_pegawai')
            ->join('evaluasi_dana_akhir', 'proyek.id','=', 'evaluasi_dana_akhir.id_proyek')
            ->select(DB::raw('sum(evaluasi_dana_akhir.dana_depdiknas_dalam_negeri) as total'))
            ->where('dosen.kode_prodi_pengajaran', $kode_prodi)
            ->where('proyek.tanggal_selesai', '=', $tahun)
            ->get();
        $danaPT = DB::table('proyek')
            ->join('dosen', 'proyek.id_dosen', '=', 'dosen.id_dosen')
            ->join('pegawai', 'dosen.id_pegawai', '=', 'pegawai.id_pegawai')
            ->join('evaluasi_dana_akhir', 'proyek.id','=', 'evaluasi_dana_akhir.id_proyek')
            ->select(DB::raw('sum(evaluasi_dana_akhir.dana_pt) as total'))
            ->where('dosen.kode_prodi_pengajaran', $kode_prodi)
            ->where('proyek.tanggal_selesai', '=', $tahun)
            ->get();
        $danaPribadi = DB::table('proyek')
            ->join('dosen', 'proyek.id_dosen', '=', 'dosen.id_dosen')
            ->join('pegawai', 'dosen.id_pegawai', '=', 'pegawai.id_pegawai')
            ->join('evaluasi_dana_akhir', 'proyek.id','=', 'evaluasi_dana_akhir.id_proyek')
            ->select(DB::raw('sum(evaluasi_dana_akhir.dana_pribadi) as total'))
            ->where('dosen.kode_prodi_pengajaran', $kode_prodi)
            ->where('proyek.tanggal_selesai', '=', $tahun)
            ->get();
        $danaInstitusiDalamNegeri = DB::table('proyek')
            ->join('dosen', 'proyek.id_dosen', '=', 'dosen.id_dosen')
            ->join('pegawai', 'dosen.id_pegawai', '=', 'pegawai.id_pegawai')
            ->join('evaluasi_dana_akhir', 'proyek.id','=', 'evaluasi_dana_akhir.id_proyek')
            ->select(DB::raw('sum(evaluasi_dana_akhir.dana_institusi_dalam_negeri) as total'))
            ->where('dosen.kode_prodi_pengajaran', $kode_prodi)
            ->where('proyek.tanggal_selesai', '=', $tahun)
            ->get();
        $danaInstitusiLuarNegeri = DB::table('proyek')
            ->join('dosen', 'proyek.id_dosen', '=', 'dosen.id_dosen')
            ->join('pegawai', 'dosen.id_pegawai', '=', 'pegawai.id_pegawai')
            ->join('evaluasi_dana_akhir', 'proyek.id','=', 'evaluasi_dana_akhir.id_proyek')
            ->select(DB::raw('sum(evaluasi_dana_akhir.dana_institusi_luar_negeri) as total'))
            ->where('dosen.kode_prodi_pengajaran', $kode_prodi)
            ->where('proyek.tanggal_selesai', '=', $tahun)
            ->get();
        $totalDepdiknasDalamNegeri = $danaDepdiknasDalamNegeri[0]->total;
        $totalDanaPT = $danaPT[0]->total;
        $totalDanaPribadi = $danaPribadi[0]->total;
        $totalDanaInstitusiDalamNegeri = $danaInstitusiDalamNegeri[0]->total;
        $totalDanaInstitusiLuarNegeri = $danaInstitusiLuarNegeri[0]->total;
        $totalDanaPenelitian = ($totalDepdiknasDalamNegeri+$totalDanaPT+$totalDanaPribadi+$totalDanaInstitusiDalamNegeri+$totalDanaInstitusiLuarNegeri)/1000000;

        return $totalDanaPenelitian;

    }
    
}
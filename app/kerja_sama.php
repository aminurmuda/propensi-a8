<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;
use App\Pimpinan;
use App\dosen;
use App\kerja_sama;
use App\program_studi;
use DB;

class kerja_sama extends Model
{
	 protected $table = 'kerja_sama';

	 public static function getKerjaSamaDalamNegeri($kode_prodi, $tahun)
    {
        $tahun_min=$tahun-2;
        return DB::table('kerja_sama')
        ->join('program_studi', 'kerja_sama.kode_prodi','=', 'program_studi.kode_prodi' )
        ->select('kerja_sama.nama_instansi', 'kerja_sama.jenis_kegiatan', 'kerja_sama.tgl_mulai', 'kerja_sama.tgl_akhir', 'kerja_sama.manfaat')
        ->where('kerja_sama.kode_prodi',$kode_prodi)
        ->where('kerja_sama.isDalamNegeri',1)
        ->where('program_studi.kode_prodi','=',$kode_prodi)
        ->get();
        //->where('kerja_sama.tgl_akhir',"<=",$tahun)
        //->where('kerja_sama.tgl_akhir',">=",$tahun_min)
        //belum diambil 3 tahun terakhir
    }
    public static function getKerjaSamaLuarNegeri($kode_prodi, $tahun)
    {
        $tahun_min=$tahun-2;
        return DB::table('kerja_sama')
        ->join('program_studi','kerja_sama.kode_prodi','=', 'program_studi.kode_prodi' )
        ->select('kerja_sama.nama_instansi', 'kerja_sama.jenis_kegiatan', 'kerja_sama.tgl_mulai', 'kerja_sama.tgl_akhir', 'kerja_sama.manfaat')
        ->where('kerja_sama.kode_prodi',$kode_prodi)
        ->where('kerja_sama.isDalamNegeri',0)
        ->where('program_studi.kode_prodi','=',$kode_prodi)
        //->where(DB::raw("year('kerja_sama.tgl_akhir')"),"<=",$tahun)
        //->where(DB::raw("year('kerja_sama.tgl_akhir')"),">=",$tahun_min)
        //belum diambil 3 tahun terakhir
        ->get();
    }
}
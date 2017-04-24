<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;
use App\Pimpinan;
use App\dosen;
use DB;

class pengmas_dosen extends Model
{
	protected $table = 'pengmas_dosen';

	public static function getPengmas($kode_prodi, $tahun)
    {
        return DB::table('pengmas_dosen')
        ->join('dosen', 'pengmas_dosen.id_dosen', '=', 'dosen.id_dosen')
        ->join('pegawai', 'dosen.id_pegawai', '=', 'pegawai.id_pegawai')
        ->select('pengmas_dosen.id_pengmas', 'pengmas_dosen.nama', 'pengmas_dosen.tahun', 'dosen.id_dosen', 'pegawai.id_pegawai', 'pegawai.nama')
        ->where('dosen.kode_prodi_pengajaran', $kode_prodi)
        ->where('pengmas_dosen.tahun', '=', $tahun)
        ->get();
    }

}
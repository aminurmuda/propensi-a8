<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\komentar;
use DB;

class Komentar extends Model
{
    protected $table = 'komentar';

    public static function getAllKomentar()
    {
        return DB::table('komentar')->get();
    }

    public static function tambahKomentar($nomorStandar, $isi, $id_reviewer) {
        return DB::table('komentar')->insert(
            ['nomor_standar' => $nomorStandar, 'isi' => $isi, 'id_reviewer' => $id_reviewer]
            );
    }

    public static function lihatKomentar($nomorStandar) {
        return DB::table('komentar')
                ->join('pegawai', 'pegawai.id_pegawai', '=', 'komentar.id_reviewer')
                ->select('pegawai.nama', 'komentar.isi', 'komentar.nomor_standar', 'komentar.date')
                ->where('komentar.nomor_standar', $nomorStandar)
                ->get();

    }

}
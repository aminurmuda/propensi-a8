<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;
use App\Pimpinan;
use DB;

class dosen extends Model
{
    protected $table = 'dosen';
        /**
         * Method getFakultasPegawai untuk mendapatkan kode fakultas dari pegawai
         * 
         * @param string $username username pegawai yang akan diambil kode fakultasnya
         * @return kode fakultas dari pegawai
         */ 
        public static function getOrganisasiDosen($kode_prodi,$tahun)
    {
        $tahun_min=$tahun-2;
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('organisasi_dosen', 'organisasi_dosen.id_dosen', '=', 'dosen.id_dosen')
            ->select('pegawai.nama as namaPegawai','organisasi_dosen.nama', 'organisasi_dosen.tahun_mulai','organisasi_dosen.tahun_selesai','organisasi_dosen.tingkat')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('organisasi_dosen.tahun_selesai',">=",$tahun_min)
            ->where('organisasi_dosen.tahun_mulai',"<=",$tahun)
            ->orwhere('organisasi_dosen.tahun_selesai',NULL)
            ->get();
    }

       /**
         * Method getFakultasPegawai untuk mendapatkan kode fakultas dari pegawai
         * 
         * @param string $username username pegawai yang akan diambil kode fakultasnya
         * @return kode fakultas dari pegawai
         */ 
        public static function getPrestasiDosen($kode_prodi,$tahun)
    {
        $tahun_min=$tahun-2;
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('prestasi_dosen', 'prestasi_dosen.id_dosen', '=', 'dosen.id_dosen')
            ->select('pegawai.nama as namaPegawai','prestasi_dosen.nama', 'prestasi_dosen.waktu','prestasi_dosen.tingkat')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('waktu',"<=",$tahun)
            ->where('waktu',">=",$tahun_min)
            ->get();
    }

       /**
         * Method getFakultasPegawai untuk mendapatkan kode fakultas dari pegawai
         * 
         * @param string $username username pegawai yang akan diambil kode fakultasnya
         * @return kode fakultas dari pegawai
         */ 
        public static function getKegiatanDosen($kode_prodi,$tahun)
    {
        $tahun_min=$tahun-2;
        $start = date("Y-m-d",strtotime($tahun_min.'-01-01'));
        $end = date("Y-m-d",strtotime($tahun.'-12-31'));
        
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('kegiatan_dosen', 'kegiatan_dosen.id_dosen', '=', 'dosen.id_dosen')
            ->select('pegawai.nama as namaPegawai','kegiatan_dosen.jenis', 'kegiatan_dosen.nama_kegiatan','kegiatan_dosen.tempat','kegiatan_dosen.waktu','kegiatan_dosen.peran')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('dosen.flag_kesesuaian',1)
            ->whereBetween('kegiatan_dosen.waktu',[$start,$end])
            ->get();
    }  

        public static function getProgramDosen($kode_prodi,$tahun)
    {
        $tahun_min=$tahun-2;
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('program_tugas_dosen', 'program_tugas_dosen.id_dosen', '=', 'dosen.id_dosen')
            ->select('pegawai.nama as namaPegawai','program_tugas_dosen.*')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('tahun_mulai',"<=",$tahun)
            ->where('tahun_mulai',">=",$tahun_min)
            ->get();
    } 

            public static function getDosenTidakTetap($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('riwayat_pendidikan', 'pegawai.id_pegawai', '=', 'riwayat_pendidikan.id_pegawai')
            ->join('jabatan_struktural', 'jabatan_struktural.id', '=', 'pegawai.id_jabatan_struktural')
            ->select('pegawai.nama as namaPegawai','dosen.NIDN','pegawai.tanggal_lahir','jabatan_struktural.nama','riwayat_pendidikan.riwayat_pendidikan','riwayat_pendidikan.gelar_pendidikan','riwayat_pendidikan.instansi_pendidikan')
            ->where('dosen.isDosenTetap',0)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->get();
    }   

            public static function getDosenTetapSesuai($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('riwayat_pendidikan', 'pegawai.id_pegawai', '=', 'riwayat_pendidikan.id_pegawai')
            ->join('jabatan_struktural', 'jabatan_struktural.id', '=', 'pegawai.id_jabatan_struktural')
            ->select('pegawai.nama as namaPegawai','dosen.NIDN','pegawai.tanggal_lahir','jabatan_struktural.nama','riwayat_pendidikan.riwayat_pendidikan','riwayat_pendidikan.gelar_pendidikan','riwayat_pendidikan.instansi_pendidikan','dosen.bidang_keahlian')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('dosen.flag_kesesuaian',1)
            ->get();
    }  

            public static function getDosenTetapTidakSesuai($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('riwayat_pendidikan', 'pegawai.id_pegawai', '=', 'riwayat_pendidikan.id_pegawai')
            ->join('jabatan_struktural', 'jabatan_struktural.id', '=', 'pegawai.id_jabatan_struktural')
            ->select('pegawai.nama as namaPegawai','dosen.NIDN','pegawai.tanggal_lahir','jabatan_struktural.nama','riwayat_pendidikan.riwayat_pendidikan','riwayat_pendidikan.gelar_pendidikan','riwayat_pendidikan.instansi_pendidikan','dosen.bidang_keahlian')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('dosen.flag_kesesuaian',0)
            ->get();
    }            

            public static function getDosenTetapPSAktivitas($kode_prodi,$tahun)
    {

        // $periode = $tahun-1."/".$tahun;
        $tahun_sebelum = $tahun-1;
        $periode= "$tahun_sebelum/$tahun";
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('dosen_mata_kuliah', 'dosen.id_dosen', '=', 'dosen_mata_kuliah.id_dosen')
            ->join('mata_kuliah', 'mata_kuliah.kode_mata_kuliah', '=', 'dosen_mata_kuliah.kode_mata_kuliah')
            ->join('rincian_kinerja_pengajaran', 'rincian_kinerja_pengajaran.kode_mata_kuliah', '=', 'mata_kuliah.kode_mata_kuliah')
            ->select('pegawai.nama as namaPegawai','dosen.bidang_keahlian','mata_kuliah.kode_mata_kuliah','mata_kuliah.nama','rincian_kinerja_pengajaran.rencana_pengajaran','rincian_kinerja_pengajaran.realisasi_pengajaran','rincian_kinerja_pengajaran.periode_pendidikan','rincian_kinerja_pengajaran.jumlah_kelas')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('periode_pendidikan',$periode)
            ->where('dosen.flag_kesesuaian',1)
            // ->where(DB::raw("substr('periode_pengajaran', 6)"),$tahun)
            ->get();
    }  

            public static function getDosenTetapTidakPSAktivitas($kode_prodi,$tahun)
    {

        // $periode = $tahun-1."/".$tahun;
        $tahun_sebelum = $tahun-1;
        $periode= "$tahun_sebelum/$tahun";
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('dosen_mata_kuliah', 'dosen.id_dosen', '=', 'dosen_mata_kuliah.id_dosen')
            ->join('mata_kuliah', 'mata_kuliah.kode_mata_kuliah', '=', 'dosen_mata_kuliah.kode_mata_kuliah')
            ->join('rincian_kinerja_pengajaran', 'rincian_kinerja_pengajaran.kode_mata_kuliah', '=', 'mata_kuliah.kode_mata_kuliah')
            ->select('pegawai.nama as namaPegawai','dosen.bidang_keahlian','mata_kuliah.kode_mata_kuliah','mata_kuliah.nama','rincian_kinerja_pengajaran.rencana_pengajaran','rincian_kinerja_pengajaran.realisasi_pengajaran','rincian_kinerja_pengajaran.periode_pendidikan','rincian_kinerja_pengajaran.jumlah_kelas')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('periode_pendidikan',$periode)
            ->where('dosen.flag_kesesuaian',0)
            // ->where(DB::raw("substr('periode_pengajaran', 6)"),$tahun)
            ->get();
    }    

            public static function getDosenTidakTetapAktivitas($kode_prodi,$tahun)
    {

        // $periode = $tahun-1."/".$tahun;
        $tahun_sebelum = $tahun-1;
        $periode= "$tahun_sebelum/$tahun";
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('dosen_mata_kuliah', 'dosen.id_dosen', '=', 'dosen_mata_kuliah.id_dosen')
            ->join('mata_kuliah', 'mata_kuliah.kode_mata_kuliah', '=', 'dosen_mata_kuliah.kode_mata_kuliah')
            ->join('rincian_kinerja_pengajaran', 'rincian_kinerja_pengajaran.kode_mata_kuliah', '=', 'mata_kuliah.kode_mata_kuliah')
            ->select('pegawai.nama as namaPegawai','dosen.bidang_keahlian','mata_kuliah.kode_mata_kuliah','mata_kuliah.nama','rincian_kinerja_pengajaran.rencana_pengajaran','rincian_kinerja_pengajaran.realisasi_pengajaran','rincian_kinerja_pengajaran.periode_pendidikan','rincian_kinerja_pengajaran.jumlah_kelas')
            ->where('dosen.isDosenTetap',0)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('periode_pendidikan',$periode)
            // ->where(DB::raw("substr('periode_pengajaran', 6)"),$tahun)
            ->get();
    }      

            public static function getTenagaAhliDosen($kode_prodi,$tahun)
    {
        $tahun_min = $tahun-2;
        $start = date("Y-m-d",strtotime($tahun_min.'-01-01'));
        $end = date("Y-m-d",strtotime($tahun.'-12-31'));

        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('kegiatan_dosen', 'kegiatan_dosen.id_dosen', '=', 'dosen.id_dosen')
            ->join('riwayat_pendidikan', 'riwayat_pendidikan.id_pegawai', '=', 'pegawai.id_pegawai')
            ->select('pegawai.nama as namaPegawai','kegiatan_dosen.nama_kegiatan','kegiatan_dosen.waktu')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('kegiatan_dosen.peran',"Penyaji")
            ->whereBetween('kegiatan_dosen.waktu',[$start,$end])
            // ->where(DB::raw("substring('kegiatan_dosen.tahun', 0, 3)"),"<=",$tahun)
            // ->where(DB::raw("substring('kegiatan_dosen.tahun', 0, 3)"),">=",$tahun_min)
            ->get();
    }

    public static function getDosenTetapSesuaiAsistenAhli($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('riwayat_pendidikan', 'pegawai.id_pegawai', '=', 'riwayat_pendidikan.id_pegawai')
            ->join('jabatan_struktural', 'jabatan_struktural.id', '=', 'pegawai.id_jabatan_struktural')
            ->select('pegawai.nama as namaPegawai','dosen.NIDN','pegawai.tanggal_lahir','jabatan_struktural.nama','riwayat_pendidikan.riwayat_pendidikan','riwayat_pendidikan.gelar_pendidikan','riwayat_pendidikan.instansi_pendidikan','dosen.bidang_keahlian')
            ->where('jabatan_struktural.nama', 'Asisten Ahli')
            ->orwhere('jabatan_struktural.nama', 'Tenaga Pengajar')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.flag_kesesuaian',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->get();
    }

    public static function getDosenTetapSesuaiLektor($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('riwayat_pendidikan', 'pegawai.id_pegawai', '=', 'riwayat_pendidikan.id_pegawai')
            ->join('jabatan_struktural', 'jabatan_struktural.id', '=', 'pegawai.id_jabatan_struktural')
            ->select('pegawai.nama as namaPegawai','dosen.NIDN','pegawai.tanggal_lahir','jabatan_struktural.nama','riwayat_pendidikan.riwayat_pendidikan','riwayat_pendidikan.gelar_pendidikan','riwayat_pendidikan.instansi_pendidikan','dosen.bidang_keahlian')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('dosen.flag_kesesuaian',1)
            ->where('jabatan_struktural.nama', 'Lektor')
            ->get();
    } 


    public static function getDosenTetapSesuaiLektorKepala($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('riwayat_pendidikan', 'pegawai.id_pegawai', '=', 'riwayat_pendidikan.id_pegawai')
            ->join('jabatan_struktural', 'jabatan_struktural.id', '=', 'pegawai.id_jabatan_struktural')
            ->select('pegawai.nama as namaPegawai','dosen.NIDN','pegawai.tanggal_lahir','jabatan_struktural.nama','riwayat_pendidikan.riwayat_pendidikan','riwayat_pendidikan.gelar_pendidikan','riwayat_pendidikan.instansi_pendidikan','dosen.bidang_keahlian')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('dosen.flag_kesesuaian',1)
            ->where('jabatan_struktural.nama', 'Lektor Kepala')
            ->get();
    }

    public static function getDosenTetapSesuaiGuruBesarProfesor($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('riwayat_pendidikan', 'pegawai.id_pegawai', '=', 'riwayat_pendidikan.id_pegawai')
            ->join('jabatan_struktural', 'jabatan_struktural.id', '=', 'pegawai.id_jabatan_struktural')
            ->select('pegawai.nama as namaPegawai','dosen.NIDN','pegawai.tanggal_lahir','jabatan_struktural.nama','riwayat_pendidikan.riwayat_pendidikan','riwayat_pendidikan.gelar_pendidikan','riwayat_pendidikan.instansi_pendidikan','dosen.bidang_keahlian')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('dosen.flag_kesesuaian',1)
            ->where('jabatan_struktural.nama', 'Guru Besar/Profesor')
            ->get();
    }

            public static function getDosenSKSAktivitasTetapSesuai($kode_prodi,$tahun)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->leftjoin('dosen_mata_kuliah', 'dosen.id_dosen', '=', 'dosen_mata_kuliah.id_dosen')
            ->leftjoin('mata_kuliah', 'mata_kuliah.kode_mata_kuliah', '=', 'dosen_mata_kuliah.kode_mata_kuliah')
            ->leftjoin('pengmas_dosen', 'pengmas_dosen.id_dosen', '=', 'dosen.id_dosen')
            ->leftjoin('proyek', 'proyek.id_dosen', '=', 'dosen.id_dosen')
            ->leftjoin('manajemen_dosen', 'manajemen_dosen.id_dosen', '=', 'dosen.id_dosen')
            ->select('pegawai.nama as namaPegawai','pengmas_dosen.sks as sks_pengmas','proyek.sks_penelitian','mata_kuliah.sesi','mata_kuliah.isProdiSendiri','mata_kuliah.isPT','manajemen_dosen.sks as sks_manajemen','manajemen_dosen.isPTSendiri')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.flag_kesesuaian',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->get();
    }    

    public static function getDosenTetapSesuaiStatusPensiun($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('status_dosen', 'dosen.id_status_dosen', '=', 'status_dosen.id')
            ->select('pegawai.nama as namaPegawai','dosen.NIDN','pegawai.tanggal_lahir', 'dosen.bidang_keahlian', 'status_dosen.nama_status_dosen')
            ->where('status_dosen.id',1)
            ->orwhere('status_dosen.id',2)
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('dosen.flag_kesesuaian',1)
            ->get();
    }

    public static function getDosenTetapSesuaiStatusDosenBaru($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('status_dosen', 'dosen.id_status_dosen', '=', 'status_dosen.id')
            ->select('pegawai.nama as namaPegawai','dosen.NIDN','pegawai.tanggal_lahir', 'dosen.bidang_keahlian', 'status_dosen.nama_status_dosen')
            ->where('status_dosen.id', 3)
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('dosen.flag_kesesuaian',1)
            ->get();
    }

    public static function getDosenTetapSesuaiStatusTugasBelajarS2($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('status_dosen', 'dosen.id_status_dosen', '=', 'status_dosen.id')
            ->select('pegawai.nama as namaPegawai','dosen.NIDN','pegawai.tanggal_lahir', 'dosen.bidang_keahlian', 'status_dosen.nama_status_dosen')
            ->where('status_dosen.id', 4)
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('dosen.flag_kesesuaian',1)
            ->get();
    }

    public static function getDosenTetapSesuaiStatusTugasBelajarS3($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('status_dosen', 'dosen.id_status_dosen', '=', 'status_dosen.id')
            ->select('pegawai.nama as namaPegawai','dosen.NIDN','pegawai.tanggal_lahir', 'dosen.bidang_keahlian', 'status_dosen.nama_status_dosen')
            ->where('status_dosen.id', 5)
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('dosen.flag_kesesuaian',1)
            ->get();
    }

    public static function getDosenTetapSesuaiPendidikanS1($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('riwayat_pendidikan', 'pegawai.id_pegawai', '=', 'riwayat_pendidikan.id_pegawai')
            ->join('jabatan_struktural', 'jabatan_struktural.id', '=', 'pegawai.id_jabatan_struktural')
            ->select('pegawai.nama as namaPegawai','dosen.NIDN','pegawai.tanggal_lahir','jabatan_struktural.nama','riwayat_pendidikan.riwayat_pendidikan','riwayat_pendidikan.gelar_pendidikan','riwayat_pendidikan.instansi_pendidikan','dosen.bidang_keahlian')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('dosen.flag_kesesuaian',1)
            ->where('riwayat_pendidikan.riwayat_pendidikan', 'S1')
            ->get();
    }  

    public static function getDosenTetapSesuaiPendidikanS2($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('riwayat_pendidikan', 'pegawai.id_pegawai', '=', 'riwayat_pendidikan.id_pegawai')
            ->join('jabatan_struktural', 'jabatan_struktural.id', '=', 'pegawai.id_jabatan_struktural')
            ->select('pegawai.nama as namaPegawai','dosen.NIDN','pegawai.tanggal_lahir','jabatan_struktural.nama','riwayat_pendidikan.riwayat_pendidikan','riwayat_pendidikan.gelar_pendidikan','riwayat_pendidikan.instansi_pendidikan','dosen.bidang_keahlian')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('dosen.flag_kesesuaian',1)
            ->where('riwayat_pendidikan.riwayat_pendidikan', 'S2')
            ->get();
    }  

    public static function getDosenTetapSesuaiPendidikanS3($kode_prodi)
    {
        return DB::table('dosen')
            ->join('pegawai', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('riwayat_pendidikan', 'pegawai.id_pegawai', '=', 'riwayat_pendidikan.id_pegawai')
            ->join('jabatan_struktural', 'jabatan_struktural.id', '=', 'pegawai.id_jabatan_struktural')
            ->select('pegawai.nama as namaPegawai','dosen.NIDN','pegawai.tanggal_lahir','jabatan_struktural.nama','riwayat_pendidikan.riwayat_pendidikan','riwayat_pendidikan.gelar_pendidikan','riwayat_pendidikan.instansi_pendidikan','dosen.bidang_keahlian')
            ->where('dosen.isDosenTetap',1)
            ->where('dosen.flag_aktif',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->where('dosen.flag_kesesuaian',1)
            ->where('riwayat_pendidikan.riwayat_pendidikan', 'S3')
            ->get();
    }  

}

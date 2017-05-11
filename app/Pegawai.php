<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pegawai;
use App\Pimpinan;
use DB;

class Pegawai extends Model
{
    protected $table = 'pegawai';

    /**
     * Method getPegawaiByUsername untuk mendapatkan pegawai dengan username tertentu
     * 
     * @param string $username username pegawai yang ingin dicari
     * @return Pegawai model
     */
    public static function getPegawaiByUsername($username)
    {
        return $pegawai = Pegawai::where('username', $username)->first();
    }

    /**
     * Method getPegawaiIsPimpinan untuk menngetahui apakah pegawai merupakan pimpinan
     * 
     * @param string $username username pegawai yang ingin dicari
     * @return true jika pimpinan.
     */
    public static function getPegawaiIsPimpinan($username) {
    	$pegawai = Pegawai::getPegawaiByUsername($username);
    	if($pegawai->isPimpinan == 1){
    		return true;
    	}
    	return false;
    }

    /**
     * Method getPegawaiIsTimAkreditasi untuk mengetahui apakah pegawai merupakan tim akreditasi
     * 
     * @param string $username username pegawai yang ingin dicari
     * @return true jika tim akreditasi
     */
    public static function getPegawaiIsTimAkreditasi($username) {
    	$pegawai = Pegawai::getPegawaiByUsername($username);
    	if($pegawai->isTimAkreditasi == 1){
    		return true;
    	}
    	return false;
    }

    /**
     * Method getPegawaiIsTimAkreditasi untuk mengetahui apakah pegawai merupakan tim akreditasi
     * 
     * @param string $username username pegawai yang ingin dicari
     * @return true jika tim akreditasi
     */
    public static function getPegawaiIsReviewerProdi($username) {
        $pegawai = Pegawai::getPegawaiByUsername($username);
        if($pegawai->is_reviewer_prodi == 1){
            return true;
        }
        return false;
    }

    /**
     * Method getPegawaiIsTimAkreditasi untuk mengetahui apakah pegawai merupakan tim akreditasi
     * 
     * @param string $username username pegawai yang ingin dicari
     * @return true jika tim akreditasi
     */
    public static function getPegawaiIsReviewerUniv($username) {
        $pegawai = Pegawai::getPegawaiByUsername($username);
        if($pegawai->is_reviewer_univ == 1){
            return true;
        }
        return false;
    }

    /**
     * Method getPegawaiIsTimAkreditasi untuk mengetahui apakah pegawai merupakan tim akreditasi
     * 
     * @param string $username username pegawai yang ingin dicari
     * @return true jika tim akreditasi
     */
    public static function getPegawaiIsAdmin($username) {
        $pegawai = Pegawai::getPegawaiByUsername($username);
        if($pegawai->isAdmin == 1){
            return true;
        }
        return false;
    }    

    /**
     * Method getTimAkreditasiByProdi untuk mendapatkan list tim akreditasi dari suatu prodi
     * 
     * @param string $kode_prodi kode prodi dari tim akreditasi yang dicari
     * @return List tim akreditasi 
     */    
    public static function getTimAkreditasiByProdi($kode_prodi)
    {
        return DB::table('pegawai')
            ->join('dosen', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->select('pegawai.nama', 'pegawai.no_pegawai')
            ->where('pegawai.isTimAkreditasi',1)
            ->where('dosen.kode_prodi_pengajaran',$kode_prodi)
            ->get();
    }

    /**
     * Method deleteTimAkreditasi agar pegawai tidak menjadi tim akreditasi
     * 
     * @param string $username username pegawai yang tidak lagi menjadi tim akreditasi
     * @return pegawai dengan $usernam tidak lagi menjadi tim akreditasi
     */      
    public static function deleteTim($username) {
        return DB::table('pegawai')
                    ->where('username', $username)
                    ->update(['isTimAkreditasi'=> 0, 'id_prodi_tim_akreditasi' => 0, 'is_reviewer_prodi' => 0, 'id_prodi_reviewer' => 0, 'id_prodi_tim_akreditasi' => 0]);
    }

    /**
     * Method addTimAkreditasi untuk melakukan penambahan anggota tim akreditasi oleh pimpinan fakultas 
     * 
     * @param string $username username pegawai yang akan menjadi anggota tim akreditasi
     * @return pegawai dengan $username  menjadi anggota tim akreditasi
     */      
    public static function addTimAkreditasi($username, $kode_prodi) {
        return DB::table('pegawai')
                    ->where('username', $username)
                    ->update(['isPimpinan'=> 0, 'isTimAkreditasi'=> 1, 'id_pimpinan'=> null, 'is_reviewer_prodi' => 0,'id_prodi_tim_akreditasi' => $kode_prodi, 'id_prodi_reviewer' => 0]);
    }

    /**
     * Method setIsPimpinan untuk menjadikan pegawai sebagai pimpinan
     * 
     * @param string $username username pegawai yang ingin dijadikan pimpinan
     * @return pegawai menjadi pimpinan (isPimpinan==1)
     */
    public static function setIsPimpinan($username) {
        return DB::table('pegawai')
                    ->where('username', $username)
                    ->update(['isPimpinan'=> 1, 'isTimAkreditasi' => 0]);
    }

     /**
     * Method hapusIsPimpinan untuk menghapus pegawai yang menjadi pimpinan
     * 
     * @param string $username username pimpinan yang ingin dihapus
     * @return pegawai tidak lagi menjadi pimpinan (isPimpinan==0)
     */
    public static function hapusIsPimpinan($username) {
        return DB::table('pegawai')
                    ->where('username', $username)
                    ->update(['isPimpinan'=> 0, 'id_pimpinan'=> null]);
    }

    /**
     * Method getAllPegawaiIsNotTim untuk mendapatkan list pegawai yang bukan anggota tim 
     * 
     * @param int $kode_fakultas id fakultas dari pegawai yang bukan anggota tim akreditasi
     * @return data pegawai yang terdapat di suatu fakultas 
     */
    public static function getAllPegawaiIsNotTim($kode_fakultas){
        return DB::table('pegawai')
            ->join('dosen', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('program_studi', 'program_studi.kode_prodi', '=', 'dosen.kode_prodi_pengajaran')
            ->select('pegawai.username', 'pegawai.nama', 'pegawai.no_pegawai', 'program_studi.nama_prodi')
            ->where('pegawai.isTimAkreditasi',0)
            ->where('pegawai.isPimpinan', 0)
            ->where('pegawai.is_reviewer_prodi', 0)
            ->where('program_studi.kode_fakultas',$kode_fakultas)
            ->get();
    }

     /**
     * Method getCalonPimpinanByUsername untuk mendapatkan username pegawai yang akan menjadi pimpinan
     * 
     * @param string $username username pegawai yang ingin dijadikan pimpinan
     * @return username dari pegawai yang akan menjadi pimpinan 
     */
    public static function getCalonPimpinanByUsername($username){
        return Pegawai::where('isTimAkreditasi', 0)
                        ->where('username', $username);
    }

    /**
     * Method getCalonPimpinanByNIP untuk mendapatkan NIP pegawai yang akan menjadi pimpinan
     * 
     * @param string $no_pegawai NIP pegawai yang ingin dijadikan pimpinan
     * @return NIP dari pegawai yang akan menjadi pimpinan 
     */
    public static function getCalonPimpinanByNIP($no_pegawai){
        return Pegawai::where('isTimAkreditasi', 0)
                        ->where('no_pegawai', $no_pegawai);
    }

     /**
     * Method getTimAkreditasiByFakultas untuk mendapatkan list tim akreditasi pada suatu fakultas
     * 
     * @param int $kode_fakultas id fakultas dari suatu fakultas
     * @return list tim akreditasi dari suatu fakultas yang sesuai
     */      
    public static function getTimByFakultas($kode_fakultas)
    {
        return DB::table('pegawai')
            ->join('dosen', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('program_studi', 'program_studi.kode_prodi', '=', 'dosen.kode_prodi_pengajaran')
            ->select('pegawai.nama', 'pegawai.no_pegawai','pegawai.username', 'program_studi.nama_prodi')
            ->where('pegawai.isTimAkreditasi',1)
            ->orWhere('pegawai.is_reviewer_prodi',1)
            ->where('program_studi.kode_fakultas',$kode_fakultas)
            ->get();
    }


        /**
         * Method getFakultasPegawai untuk mendapatkan kode fakultas dari pegawai
         * 
         * @param string $username username pegawai yang akan diambil kode fakultasnya
         * @return kode fakultas dari pegawai
         */ 
        public static function getFakultasPegawai($username)
    {
        return DB::table('pegawai')
            ->join('dosen', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->join('program_studi', 'program_studi.kode_prodi', '=', 'dosen.kode_prodi_pengajaran')
            ->join('fakultas', 'program_studi.kode_fakultas', '=', 'fakultas.kode_fakultas')
            ->select('program_studi.kode_fakultas','fakultas.nama_fakultas')
            ->where('pegawai.username',$username)
            ->get();
    }

    /**
     * Method lihatProfilPengguna untuk menampilkan data lengkap dari pengguna yang sedang login
     * 
     * @param string $username username pengguna yang sedang login
     * @return data lengkap dari pengguna yang sedang login
     */  
    public static function lihatProfilPengguna($username)
    {
    return DB::table('pegawai')
        ->join('dosen', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
        ->join('program_studi', 'program_studi.kode_prodi', '=', 'dosen.kode_prodi_pengajaran')
        ->select('pegawai.nama', 'pegawai.no_pegawai','pegawai.username','program_studi.nama_prodi')
        ->where('pegawai.username',$username)
        ->get();
    }

    public static function lihatProdiTimAkreditasi($username) {
        return DB::table('pegawai')
        ->join('dosen', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
        ->join('program_studi', 'program_studi.kode_prodi', '=', 'pegawai.id_prodi_tim_akreditasi')
        ->select('program_studi.nama_prodi')
        ->where('pegawai.username',$username)
        ->get();
    }

    public static function lihatProdiTimReviewer($username) {
        return DB::table('pegawai')
        ->join('dosen', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
        ->join('program_studi', 'program_studi.kode_prodi', '=', 'pegawai.id_prodi_reviewer')
        ->select('program_studi.nama_prodi')
        ->where('pegawai.username',$username)
        ->get();
    }

    /**
     * Method getPimpinanPegawai untuk mendapatkan data pegawai yang menjadi pimpinan
     * 
     * @param string $username username pegawai yang merupakan seorang pimpinan
     * @return pegawai dengan $username yang menjadi pimpinan 
     */   
    public static function getPimpinanPegawai($username) {
        return DB::table('pegawai')
            ->join('pimpinan', 'pimpinan.id_pimpinan', '=', 'pegawai.id_pimpinan')
            ->select('pegawai.username', 'pegawai.nama', 'pegawai.no_pegawai','pimpinan.isBPMA','pimpinan.isPimpinanFakultas','pimpinan.id_fakultas','pimpinan.isPimpinanUniv', 'pimpinan.isUPMAF')
            ->where('pegawai.username',$username)->get();
    }

    /**
     * Method lihatSemuaPimpinan untuk mendapatkan list semua pimpinan
     * 
     * @param 
     * @return pegawai yang menjadi pimpinan
     */ 
    public static function lihatSemuaPimpinan(){
        return DB::table('pegawai')
            ->join('pimpinan', 'pimpinan.id_pimpinan', '=', 'pegawai.id_pimpinan')
            ->select('pegawai.username', 'pegawai.nama', 'pegawai.no_pegawai','pimpinan.isBPMA','pimpinan.isPimpinanFakultas','pimpinan.id_fakultas','pimpinan.isPimpinanUniv','pimpinan.isUPMAF')
            ->get();
    }

    /**
     * Method updateIdPimpinanPegawai untuk mengubah id dari pimpinan yang baru (perubahan jabatan pimpinan)
     * 
     * @param string $username username pegawai yang merupakan seorang pimpinan
     * @return id pimpinan terbaru dari pegawai dengan $username yang sesuai
     */ 
    public static function updateIdPimpinanPegawai($username) {
        $idPimpinan = Pimpinan::getIdPimpinanTerakhir();
        return DB::table('pegawai')
                  -> where('username', $username)
                  -> update(['id_pimpinan'=> $idPimpinan]);
    }

        /**
         * Method getFakultasPegawai untuk mendapatkan kode fakultas dari pegawai
         * 
         * @param string $username username pegawai yang akan diambil kode fakultasnya
         * @return kode fakultas dari pegawai
         */ 
        public static function getProdiPegawai($username)
    {
        return DB::table('pegawai')
            ->join('dosen', 'pegawai.id_pegawai', '=', 'dosen.id_pegawai')
            ->select('dosen.kode_prodi_pengajaran')
            ->where('pegawai.username',$username)
            ->get();
    }   

        public static function getTimAkreditasi($username)
    {
        return DB::table('pegawai')
            ->where('pegawai.username',$username)
            ->where('isTimAkreditasi',1)
            ->get();
    }  

    public static function addReviewerProdi($username, $kode_prodi) {
        return DB::table('pegawai')
                    ->where('username', $username)
                    ->update(['isPimpinan'=> 0, 'isTimAkreditasi'=> 0, 'id_pimpinan'=> null, 'is_reviewer_prodi' => 1,'id_prodi_tim_akreditasi' => 0, 'id_prodi_reviewer' => $kode_prodi]);
    }

}

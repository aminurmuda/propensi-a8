<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route untuk mengakses halaman khusus
Route::get('login', 'MainController@login');

// Route untuk logout

//kalau belum login, mengakses route dibawah akan diarahkan ke halaman login
Route::group(['middleware'=>['home']], function() {

Route::get('home', 'MainController@home')->name('home');

Route::get('logout', 'MainController@logout')->name('logout');

Route::get('timakreditasi/kelola', 'PegawaiController@pilihFakultasKelola')->name('timakreditasi/kelola'); //Admin kelola Tim Akreditasi

Route::get('timakreditasi/tambah', 'PegawaiController@pilihFakultasTambah')->name('timakreditasi/tambah'); //Admin kelola Tim Akreditasi

Route::get('timakreditasi/tambah/update/{username}', 'PegawaiController@profilUpdateRolePegawai')->name('timakreditasi/tambah/{username}'); //Update pegawai menjadi tim Akreditasi

Route::post('timakreditasi/tambah/update/{username}', 'PegawaiController@tambahTimAkreditasi')->name('timakreditasi/tambah/{username}/{kode_prodi}'); //Update pegawai menjadi tim Akreditasi

Route::get('timakreditasi/kelola/{kode_fakultas}', 'PegawaiController@lihatPengguna')->name('timakreditasi/kelola/{kode_fakultas}'); //pimpinan fakultas only

Route::post('timakreditasi/kelola/{kode_fakultas}', 'PegawaiController@lihatPengguna')->name('timakreditasi/kelola/{kode_fakultas}'); //Untuk versi admin only

Route::get('timakreditasi/tambah/{kode_fakultas}', 'PegawaiController@lihatPegawaiIsNotTim')->name('timakreditasi/tambah/{kode_fakultas}'); //pimpinan fakultas only

Route::post('timakreditasi/tambah/{kode_fakultas}', 'PegawaiController@lihatPegawaiIsNotTim')->name('timakreditasi/tambah/{kode_fakultas}'); //Untuk versi admin only

//Route::get('timakreditasi/tambah/tambah/{username}', 'PegawaiController@tambahTimAkreditasi')->name('timakreditasi/tambah/tambah/{username}'); //pimpinan fakultas only

Route::get('timakreditasi/kelola/hapus/{username}', 'PegawaiController@deleteTim')->name('timakreditasi/hapus/{username}'); //pimpinan fakultas only

Route::get('profil/{username}', 'PegawaiController@profilPengguna')->name('profil/{username}');
Route::post('profil/{username}', 'PegawaiController@profilPengguna')->name('profil/{username}');

Route::get('kelolapimpinan/{username}', 'PegawaiController@kelolaPimpinanPage')->name('kelolapimpinan/{username}'); //admin only

Route::get('kelolapimpinan/hapus/{username}', 'PegawaiController@hapusPimpinan')->name('kelolapimpinan/hapus/{username}'); //admin only

Route::get('kelolapimpinan/tambah/{username}/{valuePimpinan}', 'PegawaiController@tambahPimpinan')->name('kelolapimpinan/tambah/{username}/{valuePimpinan}'); //admin only

Route::get('kelolapimpinan/{username}', 'PegawaiController@kelolaPimpinanPage')->name('kelolapimpinan'); //admin only

Route::get('pimpinan', 'PegawaiController@kelolapimpinan')->name('pimpinan'); //admin only

Route::get('3a/standar4', 'BorangController@pilihProdi')->name('3a/standar4'); //pimpinan univ only

Route::get('3a/standar4/submit', 'BorangController@lihat3a4')->name('3a/standar4/submit'); //pimpinan univ only

Route::get('3a/standar4/{kodeProdi}', 'BorangController@lihat3a4')->name('3a/standar4/{kodeProdi}'); 
Route::post('3a/standar4/{kodeProdi}', 'BorangController@lihat3a4')->name('3a/standar4/{kodeProdi}'); 

Route::get('3a/standar4edit/{kodeStandar}/{idHistori}', 'BorangController@edit3a4')->name('3a/standar4edit/{kodeStandar}/{idHistori}'); 

Route::get('3a/standar4edit/{kodeStandar}/{idHistori}/{jenisBorang}/submit', 'BorangController@submitKualitatif')->name('3a/standar4edit/{kodeStandar}/idHistori}/{jenisBorang}/submit'); //pimpinan 
Route::get('3a/standar4/{kodeStandar}/{kodeProdi}/{idHistori}/{jenisBorang}/submitkomentar', 'BorangController@komenBorang')->name('3a/standar4/{kodeStandar}/{kodeProdi}/{idHistori}/{jenisBorang}/submitkomentar');

Route::get('3b/standar2edit/{kodeStandar}/{idHistori}', 'BorangController@edit3b2')->name('3b/standar2edit/{kodeStandar}/{idHistori}'); 

Route::get('3b/standar2edit/{kodeStandar}/{idHistori}/{jenisBorang}/submit', 'BorangController@submitKualitatif')->name('3b/standar2edit/{kodeStandar}/{kodeFakultas}/{jenisBorang}/submit');


Route::get('3a/standar2', 'BorangController@pilihProdi')->name('3a/standar2'); //pimpinan univ only
Route::get('3a/standar2/{kodeProdi}', 'BorangController@lihat3a2')->name('3a/standar2/{kodeProdi}');
Route::post('3a/standar2/{kodeProdi}', 'BorangController@lihat3a2')->name('3a/standar2/{kodeProdi}'); 

Route::get('3a/standar2edit/{kodeStandar}/{kodeProdi}', 'BorangController@edit3a2')->name('3a/standar2edit/{kodeStandar}/{kodeProdi}');
Route::get('3a/standar2edit/{kodeStandar}/{kodeProdi}/{jenisBorang}/submit', 'BorangController@submitKualitatif')->name('3a/standar2edit/{kodeStandar}/{kodeProdi}/{jenisBorang}/submit');
Route::get('3a/standar2/{kodeStandar}/{kodeProdi}/{idHistori}/{jenisBorang}/submitkomentar', 'BorangController@komenBorang')->name('3a/standar2/{kodeStandar}/{kodeProdi}/{idHistori}/{jenisBorang}/submitkomentar');


Route::get('3b/standar2/{kodeFakultas}', 'BorangController@lihat3b2')->name('3b/standar2/{kodeFakultas}');
Route::get('3b/standar2/{kodeStandar}/{kodeProdi}/{idHistori}/{jenisBorang}/submitkomentar', 'BorangController@komenBorang')->name('3b/standar2/{kodeStandar}/{kodeProdi}/{idHistori}/{jenisBorang}/submitkomentar');

Route::get('3b/standar2', 'BorangController@pilihFakultasGeneral')->name('3b/standar2'); //pimpinan univ only



Route::get('3a/standar7', 'BorangController@pilihProdi')->name('3a/standar7'); //pimpinan univ only

Route::get('3a/standar7/submit', 'BorangController@lihat3a7')->name('3a/standar7/submit'); //pimpinan univ only

Route::get('3a/standar7/{kodeProdi}', 'BorangController@lihat3a7')->name('3a/standar7/{kodeProdi}');

Route::post('3a/standar7/{kodeProdi}', 'BorangController@lihat3a7')->name('3a/standar7/{kodeProdi}'); 

Route::get('3a/standar7edit/{kodeProdi}', 'BorangController@edit3a7')->name('3a/standar7edit/{kodeProdi}'); 

Route::get('3a/standar7edit/{kodeStandar}/{idHistori}', 'BorangController@edit3a7')->name('3a/standar7edit/{kodeStandar}/{idHistori}'); 

Route::get('3a/standar7edit/{kodeStandar}/{idHistori}/{jenisBorang}/submit', 'BorangController@submitKualitatif')->name('3a/standar7edit/{kodeStandar}/{idHistori}/{jenisBorang}/submit'); //pimpinan 
Route::get('3a/standar7/{kodeStandar}/{kodeProdi}/{idHistori}/{jenisBorang}/submitkomentar', 'BorangController@komenBorang')->name('3a/standar7/{kodeStandar}/{kodeProdi}/{idHistori}/{jenisBorang}/submitkomentar');

Route::get('3b/standar4/', 'BorangController@pilihFakultasGeneral')->name('3b/standar4'); //pimpinan univ, reviewer univ, admin only

Route::get('3b/standar4/submit', 'BorangController@lihat3b4')->name('3b/standar4/submit'); //pimpinan univ, reviewer univ, admin only

Route::get('3b/standar4/{kodeFakultas}', 'BorangController@lihat3b4')->name('3b/standar4/{kodeFakultas}');

Route::get('3b/standar4edit/{kodeStandar}/{idHistori}', 'BorangController@edit3b4')->name('3b/standar4edit/{kodeStandar}/{idHistori}'); 

Route::get('3b/standar4edit/{kodeStandar}/{idHistori}/{jenisBorang}/submit', 'BorangController@submitKualitatif')->name('3b/standar4edit/{kodeStandar}/{idHistori}/{jenisBorang}/submit'); //pimpinan 

Route::get('3b/standar4/{kodeStandar}/{kodeProdi}/{idHistori}/{jenisBorang}/submitkomentar', 'BorangController@komenBorang')->name('3b/standar4/{kodeStandar}/{kodeProdi}/{idHistori}/{jenisBorang}/submitkomentar');

Route::get('3b/standar4edit/{kodeFakultas}', 'BorangController@edit3b4')->name('3b/standar4edit/{kodeProdi}');

Route::get('3b/standar7', 'BorangController@pilihFakultasGeneral')->name('3b/standar7'); //pimpinan univ, reviewer univ, admin only

Route::get('3b/standar7/submit', 'BorangController@lihat3b7')->name('3b/standar7/submit'); //pimpinan univ, reviewer univ, admin only

Route::get('3b/standar7/{kodeFakultas}', 'BorangController@lihat3b7')->name('3b/standar7/{kodeFakultas}');

Route::get('3b/standar7edit/{kodeFakultas}', 'BorangController@edit3b7')->name('3b/standar7edit/{kodeFakultas}');

Route::get('3b/standar7edit/{kodeStandar}/{idHistori}', 'BorangController@edit3b7')->name('3b/standar7edit/{kodeStandar}/{idHistori}'); 
Route::get('3b/standar7edit/{kodeStandar}/{idHistori}/{jenisBorang}/submit', 'BorangController@submitKualitatif')->name('3b/standar7edit/{kodeStandar}/{idHistori}/{jenisBorang}/submit'); //pimpinan 

Route::get('3b/standar7/{kodeStandar}/{kodeProdi}/{idHistori}/{jenisBorang}/submitkomentar', 'BorangController@komenBorang')->name('3b/standar7/{kodeStandar}/{kodeProdi}/{idHistori}/{jenisBorang}/submitkomentar');


Route::get('akreditasi/lihat/{tahun}/{kodeProdi}', 'AkreditasiController@lihatAkreditasi')->name('akreditasi/lihat/{kodeProdi}');
Route::get('akreditasi/edit/{tahun}/{kodeProdi}', 'AkreditasiController@editAkreditasi')->name('akreditasi/edit/{kodeProdi}');
Route::get('akreditasi/edit/{tahun}/{kodeProdi}/submit', 'AkreditasiController@submitAkreditasi')->name('akreditasi/{tahun}/{kodeProdi}/submit');
// Route::post('akreditasi/edit/{tahun_keluar}/{kodeProdi}/submit', 'AkreditasiController@submitAkreditasi')->name('akreditasi/{tahun_keluar}/{kodeProdi}/submit');



Route::get('3A', 'BorangController@pilihProdi')->name('3A');
Route::post('3A/{kodeProdi}/{tahun}', 'BorangController@pilihBorang3a')->name('3A/{kodeProdi}');
Route::get('3A/{kodeProdi}/{tahun}', 'BorangController@pilihBorang3a')->name('3A/{kodeProdi}');
Route::get('3A/{kodeProdi}/{tahun}/standar2', 'BorangController@lihat3a2')->name('3A/{kodeProdi}/standar2');
Route::get('3A/{kodeProdi}/{tahun}/standar4', 'BorangController@lihat3a4')->name('3A/{kodeProdi}/{tahun}/standar4');
Route::get('3A/{kodeProdi}/{tahun}/standar7', 'BorangController@lihat3a7')->name('3A/{kodeProdi}/{tahun}/standar7');

Route::get('3B', 'BorangController@pilihFakultasGeneral')->name('3B');
Route::post('3B/{idHistori}/{tahun}', 'BorangController@pilihBorang3b')->name('3B/{idHistori}/{tahun}');
Route::get('3B/{idHistori}/{tahun}', 'BorangController@pilihBorang3b')->name('3B/{idHistori}/{tahun}');
Route::get('3B/{idHistori}/{tahun}/standar2', 'BorangController@lihat3b2')->name('3B/{idHistori}/{tahun}/standar2');
Route::get('3B/{idHistori}/{tahun}/standar4', 'BorangController@lihat3b4')->name('3B/{idHistori}/{tahun}/standar4');
Route::get('3B/{idHistori}/{tahun}/standar7', 'BorangController@lihat3b7')->name('3B/{idHistori}/{tahun}/standar7');


Route::get('test', 'TestController@index')->name('#');

Route::get('evaluasidiri', 'BorangController@pilihProdi')->name('evaluasidiri'); //pimpinan univ only
Route::get('evaluasidiri/edit/{jenis}/{idHistori}', 'BorangController@editEvaluasi')->name('evaluasidiri/edit/{jenis}/{idHistori}');

Route::post('evaluasidiri/{idHistori}/{tahun}', 'BorangController@lihatEvaluasi')->name('evaluasidiri/{idHistori}/{tahun}');
Route::get('evaluasidiri/{idHistori}/{tahun}', 'BorangController@lihatEvaluasi')->name('evaluasidiri/{idHistori}/{tahun}');
Route::get('evaluasidiri/{idHistori}/{tahun}/print', 'BorangController@printEvaluasi')->name('evaluasidiri/{idHistori}/{tahun}/print');


Route::post('evaluasidiri/edit/{jenis}/{idHistori}/{jenisBorang}/submit', 'BorangController@submitevaluasi')->name('evaluasidiri/edit/{jenis}/{idHistori}/{jenisBorang}/submit');

Route::get('evaluasidiri/standarED/{kodeStandar}/{kodeProdi}/{idHistori}/{jenisBorang}/submitkomentar', 'BorangController@komenBorang')->name('evaluasidiri/standarED/{kodeStandar}/{kodeProdi}/{idHistori}/{jenisBorang}/submitkomentar');


Route::get('tambahakreditasi', 'AkreditasiController@tambahAkreditasi')->name('tambahakreditasi');
Route::get('akreditasi/tambah', 'AkreditasiController@formTambahAkreditasi')->name('akreditasi/tambah');
Route::get('akreditasi/tambah/submit', 'AkreditasiController@tambahAkreditasi')->name('akreditasi/tambah/submit');


Route::get('akreditasi/riwayat/{kodeFakultas}', 'AkreditasiController@lihatRiwayat')->name('akreditasi/riwayat/{kodeFakultas}');
Route::post('akreditasi/riwayat/{kodeFakultas}', 'AkreditasiController@lihatRiwayat')->name('akreditasi/riwayat/{kodeFakultas}');
Route::get('akreditasi/riwayat', 'BorangController@pilihFakultasGeneral')->name('akreditasi/riwayat');


Route::get('akreditasi/{idHistori}/{newStatus}/submit', 'AkreditasiController@submitStatusAkreditasi')->name('akreditasi/{idHistori}/{newStatus}/submit'); //submit borang dari tim akreditasi ke reviewer

Route::get('homestatus', 'AkreditasiController@lihatStatusBorang')->name('homestatus');


Route::get('borang/{idHistori}/{jenisBorang}/{kodeProdi}/publish', 'BorangController@submitBorangtoReviewer')->name('borang/{idHistori}/{jenisBorang}/{kodeProdi}/publish');

Route::get('borang/{idHistori}/{jenisBorang}/{kodeProdi}/submit', 'BorangController@submitBorangtoBPMA')->name('borang/{idHistori}/{jenisBorang}/{kodeProdi}/submit');

Route::get('borang/{idHistori}/{jenisBorang}/{kodeProdi}/return', 'BorangController@returntoTimAkreditasi')->name('borang/{idHistori}/{jenisBorang}/{kodeProdi}/return');

Route::get('akreditasi/{idHistori}/edit', 'AkreditasiController@editAkreditasi')->name('akreditasi/{idHistori}/edit');


Route::get('akreditasi/riwayat/fakultas', 'BorangController@pilihFakultasGeneral')->name('akreditasi/riwayat/fakultas');

Route::post('akreditasi/riwayat/fakultas/{kodeFakultas}', 'AkreditasiController@lihatRiwayat')->name('akreditasi/riwayat/fakultas/{kodeFakultas}');

Route::get('akreditasi/{idHistori}/{tahun}/pilih', 'AkreditasiController@pilihJenisBorang')->name('akreditasi/{idHistori}/{tahun}/pilih');

Route::get('homepimpinan', 'AkreditasiController@homePimpinan')->name('homepimpinan');

Route::get('homeuniv', 'BorangController@pilihFakultasGeneral')->name('homeuniv');

Route::post('uploadFoto', 'PegawaiController@uploadFoto')->name('uploadFoto');





});



//kalau udah login, ngakses route dibawah ini akan diarahkan ke home
Route::get('/', function () {
    return view('landing');
})->middleware('beranda')->name('/');
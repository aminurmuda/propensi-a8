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

Route::get('timakreditasi/tambah/update/{username}', 'PegawaiController@profilUpdateTimAkreditasi')->name('timakreditasi/tambah/{username}'); //Update pegawai menjadi tim Akreditasi

Route::post('timakreditasi/tambah/update/{username}', 'PegawaiController@tambahTimAkreditasi')->name('timakreditasi/tambah/{username}/{kode_prodi}'); //Update pegawai menjadi tim Akreditasi

Route::get('timakreditasi/kelola/{kode_fakultas}', 'PegawaiController@lihatPengguna')->name('timakreditasi/kelola/{kode_fakultas}'); //pimpinan fakultas only

Route::post('timakreditasi/kelola/{kode_fakultas}', 'PegawaiController@lihatPengguna')->name('timakreditasi/kelola/{kode_fakultas}'); //Untuk versi admin only

Route::get('timakreditasi/tambah/{kode_fakultas}', 'PegawaiController@lihatPegawaiIsNotTimAkreditasi')->name('timakreditasi/tambah/{kode_fakultas}'); //pimpinan fakultas only

Route::post('timakreditasi/tambah/{kode_fakultas}', 'PegawaiController@lihatPegawaiIsNotTimAkreditasi')->name('timakreditasi/tambah/{kode_fakultas}'); //Untuk versi admin only

//Route::get('timakreditasi/tambah/tambah/{username}', 'PegawaiController@tambahTimAkreditasi')->name('timakreditasi/tambah/tambah/{username}'); //pimpinan fakultas only

Route::get('timakreditasi/kelola/hapus/{username}', 'PegawaiController@deleteTimAkreditasi')->name('timakreditasi/hapus/{username}'); //pimpinan fakultas only

Route::get('profil/{username}', 'PegawaiController@profilPengguna')->name('profil/{username}');

Route::get('kelolapimpinan/{username}', 'PegawaiController@kelolaPimpinanPage')->name('kelolapimpinan/{username}'); //admin only

Route::get('kelolapimpinan/hapus/{username}', 'PegawaiController@hapusPimpinan')->name('kelolapimpinan/hapus/{username}'); //admin only

Route::post('kelolapimpinan/tambah/{username}/{valuePimpinan}', 'PegawaiController@tambahPimpinan')->name('kelolapimpinan/tambah/{username}/{valuePimpinan}'); //admin only

Route::get('kelolapimpinan/{username}', 'PegawaiController@kelolaPimpinanPage')->name('kelolapimpinan'); //admin only

Route::get('pimpinan', 'PegawaiController@kelolapimpinan')->name('pimpinan'); //admin only

Route::get('3a/standar4', 'PegawaiController@pilihProdi')->name('3a/standar4'); //pimpinan univ only

Route::get('3a/standar4/submit', 'PegawaiController@lihat3a4')->name('3a/standar4/submit'); //pimpinan univ only

Route::get('3a/standar4/{kodeProdi}', 'PegawaiController@lihat3a4')->name('3a/standar4/{kodeProdi}'); 
Route::post('3a/standar4/{kodeProdi}', 'PegawaiController@lihat3a4')->name('3a/standar4/{kodeProdi}'); 

Route::get('3a/standar4edit/{kodeStandar}/{kodeProdi}', 'PegawaiController@edit3a4')->name('3a/standar4edit/{kodeStandar}/{kodeProdi}'); 

Route::get('3a/standar4edit/{kodeStandar}/{kodeProdi}/{jenisBorang}/submit', 'PegawaiController@submitKualitatif')->name('3a/standar4edit/{kodeStandar}/{kodeProdi}/{jenisBorang}/submit'); //pimpinan 

Route::get('3b/standar2edit/{kodeStandar}/{kodeProdi}', 'PegawaiController@edit3b2')->name('3b/standar2edit/{kodeStandar}/{kodeProdi}'); 

Route::get('3b/standar2edit/{kodeStandar}/{kodeFakultas}/{jenisBorang}/submit', 'PegawaiController@submitKualitatif')->name('3b/standar2edit/{kodeStandar}/{kodeFakultas}/{jenisBorang}/submit');


Route::get('3a/standar2', 'PegawaiController@pilihProdi')->name('3a/standar2'); //pimpinan univ only
Route::get('3a/standar2/{kodeProdi}', 'PegawaiController@lihat3a2')->name('3a/standar2/{kodeProdi}'); 
Route::post('3a/standar2/{kodeProdi}', 'PegawaiController@lihat3a2')->name('3a/standar2/{kodeProdi}'); 

Route::get('3a/standar2edit/{kodeStandar}/{kodeProdi}', 'PegawaiController@edit3a2')->name('3a/standar2edit/{kodeStandar}/{kodeProdi}');
Route::get('3a/standar2edit/{kodeStandar}/{kode}/{jenisBorang}/submit', 'PegawaiController@submitKualitatif')->name('3a/standar2edit/{kodeStandar}/{kodeProdi}/{jenisBorang}/submit');
Route::get('3a/standar2edit/{kodeStandar}/{nomorIsian}/{kodeProdi}', 'PegawaiController@edit3a25')->name('3a/standar2edit/{kodeStandar}/{nomorIsian}/{kodeProdi}');
Route::get('3a/standar2edit/{kodeStandar}/{nomorIsian}/{kodeProdi}/{jenisBorang}/submit', 'PegawaiController@submit3a25')->name('3a/standar2edit/{kodeStandar}/{nomorIsian}/{kodeProdi}/{jenisBorang}/submit');



Route::get('3b/standar2/{kodeFakultas}', 'PegawaiController@lihat3b2')->name('3b/standar2/{kodeFakultas}'); 

Route::get('3b/standar2', 'PegawaiController@pilihFakultasGeneral')->name('3b/standar2'); //pimpinan univ only



Route::get('3a/standar7', 'PegawaiController@pilihProdi')->name('3a/standar7'); //pimpinan univ only

Route::get('3a/standar7/submit', 'PegawaiController@lihat3a7')->name('3a/standar7/submit'); //pimpinan univ only

Route::get('3a/standar7/{kodeProdi}', 'PegawaiController@lihat3a7')->name('3a/standar7/{kodeProdi}');

Route::post('3a/standar7/{kodeProdi}', 'PegawaiController@lihat3a7')->name('3a/standar7/{kodeProdi}'); 

Route::get('3a/standar7edit/{kodeProdi}', 'PegawaiController@edit3a7')->name('3a/standar7edit/{kodeProdi}'); 

Route::get('3a/standar7edit/{kodeStandar}/{kodeProdi}', 'PegawaiController@edit3a7')->name('3a/standar7edit/{kodeStandar}/{kodeProdi}'); 

Route::get('3a/standar7edit/{kodeStandar}/{kodeProdi}/{jenisBorang}/submit', 'PegawaiController@submitKualitatif')->name('3a/standar7edit/{kodeStandar}/{kodeProdi}/{jenisBorang}/submit'); //pimpinan 

Route::get('3b/standar4/', 'PegawaiController@pilihFakultasGeneral')->name('3b/standar4'); //pimpinan univ, reviewer univ, admin only

Route::get('3b/standar4/submit', 'PegawaiController@lihat3b4')->name('3b/standar4/submit'); //pimpinan univ, reviewer univ, admin only

Route::get('3b/standar4/{kodeFakultas}', 'PegawaiController@lihat3b4')->name('3b/standar4/{kodeFakultas}');

Route::get('3b/standar4edit/{kodeStandar}/{kodeFakultas}', 'PegawaiController@edit3b4')->name('3b/standar4edit/{kodeStandar}/{kodeFakultas}'); 

Route::get('3b/standar4edit/{kodeStandar}/{kodeFakultas}/{jenisBorang}/submit', 'PegawaiController@submitKualitatif')->name('3b/standar4edit/{kodeStandar}/{kodeFakultas}/{jenisBorang}/submit'); //pimpinan 

Route::get('3b/standar4edit/{kodeFakultas}', 'PegawaiController@edit3b4')->name('3b/standar4edit/{kodeProdi}');

Route::get('3b/standar7', 'PegawaiController@pilihFakultasGeneral')->name('3b/standar7'); //pimpinan univ, reviewer univ, admin only

Route::get('3b/standar7/submit', 'PegawaiController@lihat3b7')->name('3b/standar7/submit'); //pimpinan univ, reviewer univ, admin only

Route::get('3b/standar7/{kodeFakultas}', 'PegawaiController@lihat3b7')->name('3b/standar7/{kodeFakultas}');

Route::get('3b/standar7edit/{kodeFakultas}', 'PegawaiController@edit3b7')->name('3b/standar7edit/{kodeFakultas}');

Route::get('3b/standar7edit/{kodeStandar}/{kodeFakultas}', 'PegawaiController@edit3b7')->name('3b/standar7edit/{kodeStandar}/{kodeFakultas}'); 
Route::get('3b/standar7edit/{kodeStandar}/{kodeFakultas}/{jenisBorang}/submit', 'PegawaiController@submitKualitatif')->name('3b/standar7edit/{kodeStandar}/{kodeFakultas}/{jenisBorang}/submit'); //pimpinan 


Route::get('akreditasi/lihat/{tahun}/{kodeProdi}', 'AkreditasiController@lihatAkreditasi')->name('akreditasi/lihat/{kodeProdi}');
Route::get('akreditasi/edit/{tahun}/{kodeProdi}', 'AkreditasiController@editAkreditasi')->name('akreditasi/edit/{kodeProdi}');
Route::get('akreditasi/edit/{tahun}/{kodeProdi}/submit', 'AkreditasiController@submitAkreditasi')->name('akreditasi/{tahun}/{kodeProdi}/submit');

Route::get('pilihborang/3a', 'BorangController@pilihBorang3A')->name('pilihborang/3a');

Route::get('pilihborang/3b', 'BorangController@pilihBorang3B')->name('pilihborang/3b');

Route::get('tambahakreditasi', 'BorangController@tambahAkreditasi')->name('tambahakreditasi');

});



//kalau udah login, ngakses route dibawah ini akan diarahkan ke home
Route::get('/', function () {
    return view('landing');
})->middleware('beranda')->name('/');
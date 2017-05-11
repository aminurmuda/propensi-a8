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

Route::get('kelolapimpinan/{username}', 'PegawaiController@kelolaPimpinanPage')->name('kelolapimpinan/{username}'); //admin only

Route::get('kelolapimpinan/hapus/{username}', 'PegawaiController@hapusPimpinan')->name('kelolapimpinan/hapus/{username}'); //admin only

Route::post('kelolapimpinan/tambah/{username}/{valuePimpinan}', 'PegawaiController@tambahPimpinan')->name('kelolapimpinan/tambah/{username}/{valuePimpinan}'); //admin only

Route::get('kelolapimpinan/{username}', 'PegawaiController@kelolaPimpinanPage')->name('kelolapimpinan'); //admin only

Route::get('pimpinan', 'PegawaiController@kelolapimpinan')->name('pimpinan'); //admin only

Route::get('3a/standar4', 'BorangController@pilihProdi')->name('3a/standar4'); //pimpinan univ only

Route::get('3a/standar4/submit', 'BorangController@lihat3a4')->name('3a/standar4/submit'); //pimpinan univ only

Route::get('3a/standar4/{kodeProdi}', 'BorangController@lihat3a4')->name('3a/standar4/{kodeProdi}'); 
Route::post('3a/standar4/{kodeProdi}', 'BorangController@lihat3a4')->name('3a/standar4/{kodeProdi}'); 

Route::get('3a/standar4edit/{kodeStandar}/{kodeProdi}', 'BorangController@edit3a4')->name('3a/standar4edit/{kodeStandar}/{kodeProdi}'); 

Route::get('3a/standar4edit/{kodeStandar}/{kodeProdi}/{jenisBorang}/submit', 'BorangController@submitKualitatif')->name('3a/standar4edit/{kodeStandar}/{kodeProdi}/{jenisBorang}/submit'); //pimpinan 

Route::get('3b/standar2edit/{kodeStandar}/{kodeProdi}', 'BorangController@edit3b2')->name('3b/standar2edit/{kodeStandar}/{kodeProdi}'); 

Route::get('3b/standar2edit/{kodeStandar}/{kodeFakultas}/{jenisBorang}/submit', 'BorangController@submitKualitatif')->name('3b/standar2edit/{kodeStandar}/{kodeFakultas}/{jenisBorang}/submit');


Route::get('3a/standar2', 'BorangController@pilihProdi')->name('3a/standar2'); //pimpinan univ only
Route::get('3a/standar2/{kodeProdi}', 'BorangController@lihat3a2')->name('3a/standar2/{kodeProdi}'); 
Route::post('3a/standar2/{kodeProdi}', 'BorangController@lihat3a2')->name('3a/standar2/{kodeProdi}'); 

Route::get('3a/standar2edit/{kodeStandar}/{kodeProdi}', 'BorangController@edit3a2')->name('3a/standar2edit/{kodeStandar}/{kodeProdi}');
Route::get('3a/standar2edit/{kodeStandar}/{kode}/{jenisBorang}/submit', 'PegawaiController@submitKualitatif')->name('3a/standar2edit/{kodeStandar}/{kodeProdi}/{jenisBorang}/submit');
Route::get('3a/standar2edit/{kodeStandar}/{nomorIsian}/{kodeProdi}', 'BorangController@edit3a25')->name('3a/standar2edit/{kodeStandar}/{nomorIsian}/{kodeProdi}');
Route::get('3a/standar2edit/{kodeStandar}/{nomorIsian}/{kodeProdi}/{jenisBorang}/submit', 'BorangController@submit3a25')->name('3a/standar2edit/{kodeStandar}/{nomorIsian}/{kodeProdi}/{jenisBorang}/submit');



Route::get('3b/standar2/{kodeFakultas}', 'BorangController@lihat3b2')->name('3b/standar2/{kodeFakultas}'); 

Route::get('3b/standar2', 'BorangController@pilihFakultasGeneral')->name('3b/standar2'); //pimpinan univ only



Route::get('3a/standar7', 'BorangController@pilihProdi')->name('3a/standar7'); //pimpinan univ only

Route::get('3a/standar7/submit', 'BorangController@lihat3a7')->name('3a/standar7/submit'); //pimpinan univ only

Route::get('3a/standar7/{kodeProdi}', 'BorangController@lihat3a7')->name('3a/standar7/{kodeProdi}');

Route::post('3a/standar7/{kodeProdi}', 'BorangController@lihat3a7')->name('3a/standar7/{kodeProdi}'); 

Route::get('3a/standar7edit/{kodeProdi}', 'BorangController@edit3a7')->name('3a/standar7edit/{kodeProdi}'); 

Route::get('3a/standar7edit/{kodeStandar}/{kodeProdi}', 'BorangController@edit3a7')->name('3a/standar7edit/{kodeStandar}/{kodeProdi}'); 

Route::get('3a/standar7edit/{kodeStandar}/{kodeProdi}/{jenisBorang}/submit', 'BorangController@submitKualitatif')->name('3a/standar7edit/{kodeStandar}/{kodeProdi}/{jenisBorang}/submit'); //pimpinan 

Route::get('3b/standar4/', 'BorangController@pilihFakultasGeneral')->name('3b/standar4'); //pimpinan univ, reviewer univ, admin only

Route::get('3b/standar4/submit', 'BorangController@lihat3b4')->name('3b/standar4/submit'); //pimpinan univ, reviewer univ, admin only

Route::get('3b/standar4/{kodeFakultas}', 'BorangController@lihat3b4')->name('3b/standar4/{kodeFakultas}');

Route::get('3b/standar4edit/{kodeStandar}/{kodeFakultas}', 'BorangController@edit3b4')->name('3b/standar4edit/{kodeStandar}/{kodeFakultas}'); 

Route::get('3b/standar4edit/{kodeStandar}/{kodeFakultas}/{jenisBorang}/submit', 'BorangController@submitKualitatif')->name('3b/standar4edit/{kodeStandar}/{kodeFakultas}/{jenisBorang}/submit'); //pimpinan 

Route::get('3b/standar4edit/{kodeFakultas}', 'BorangController@edit3b4')->name('3b/standar4edit/{kodeProdi}');

Route::get('3b/standar7', 'BorangController@pilihFakultasGeneral')->name('3b/standar7'); //pimpinan univ, reviewer univ, admin only

Route::get('3b/standar7/submit', 'BorangController@lihat3b7')->name('3b/standar7/submit'); //pimpinan univ, reviewer univ, admin only

Route::get('3b/standar7/{kodeFakultas}', 'BorangController@lihat3b7')->name('3b/standar7/{kodeFakultas}');

Route::get('3b/standar7edit/{kodeFakultas}', 'BorangController@edit3b7')->name('3b/standar7edit/{kodeFakultas}');

Route::get('3b/standar7edit/{kodeStandar}/{kodeFakultas}', 'BorangController@edit3b7')->name('3b/standar7edit/{kodeStandar}/{kodeFakultas}'); 
Route::get('3b/standar7edit/{kodeStandar}/{kodeFakultas}/{jenisBorang}/submit', 'BorangController@submitKualitatif')->name('3b/standar7edit/{kodeStandar}/{kodeFakultas}/{jenisBorang}/submit'); //pimpinan 


Route::get('akreditasi/lihat/{tahun}/{kodeProdi}', 'AkreditasiController@lihatAkreditasi')->name('akreditasi/lihat/{kodeProdi}');
Route::get('akreditasi/edit/{tahun}/{kodeProdi}', 'AkreditasiController@editAkreditasi')->name('akreditasi/edit/{kodeProdi}');
Route::get('akreditasi/edit/{tahun}/{kodeProdi}/submit', 'AkreditasiController@submitAkreditasi')->name('akreditasi/{tahun}/{kodeProdi}/submit');

Route::get('3a', 'BorangController@pilihProdi')->name('3a');
Route::post('3a/{kodeProdi}', 'BorangController@pilihBorang3A')->name('3a/{kodeProdi}');
Route::get('3a/{kodeProdi}', 'BorangController@pilihBorang3A')->name('3a/{kodeProdi}');
Route::get('3a/{kodeProdi}/standar2', 'BorangController@lihat3a2')->name('3a/{kodeProdi}/standar2');
Route::get('3a/{kodeProdi}/standar4', 'BorangController@lihat3a4')->name('3a/{kodeProdi}/standar4');
Route::get('3a/{kodeProdi}/standar7', 'BorangController@lihat3a7')->name('3a/{kodeProdi}/standar7');

Route::get('3b', 'BorangController@pilihFakultasGeneral')->name('3b');
Route::post('3b/{kodeFakultas}', 'BorangController@pilihBorang3B')->name('3b/{kodeFakultas}');
Route::get('3b/{kodeFakultas}', 'BorangController@pilihBorang3B')->name('3b/{kodeFakultas}');
Route::get('3b/{kodeFakultas}/standar2', 'BorangController@lihat3b2')->name('3b/{kodeFakultas}/standar2');
Route::get('3b/{kodeFakultas}/standar4', 'BorangController@lihat3b4')->name('3b/{kodeFakultas}/standar4');
Route::get('3b/{kodeFakultas}/standar7', 'BorangController@lihat3b7')->name('3b/{kodeFakultas}/standar7');


Route::get('test', 'TestController@index')->name('#');


Route::get('evaluasidiri', 'BorangController@lihatEvaluasi')->name('evaluasidiri');

Route::get('evaluasiDiri/{kodeFakultas}', 'BorangController@lihatEvaluasiDiri')->name('evaluasiDiri/{kodeFakultas}');


Route::get('tambahakreditasi', 'AkreditasiController@tambahAkreditasi')->name('tambahakreditasi');


Route::get('riwayatakreditasi', 'AkreditasiController@lihatRiwayat')->name('riwayatakreditasi');


});



//kalau udah login, ngakses route dibawah ini akan diarahkan ke home
Route::get('/', function () {
    return view('landing');
})->middleware('beranda')->name('/');
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

Route::get('timakreditasi/kelola', 'PegawaiController@pilihFakultas')->name('timakreditasi/kelola'); //Admin kelola Tim Akreditasi

Route::get('timakreditasi/tambah', 'PegawaiController@pilihFakultas')->name('timakreditasi/tambah'); //Admin kelola Tim Akreditasi

Route::get('timakreditasi/kelola/{kode_fakultas}', 'PegawaiController@lihatPengguna')->name('timakreditasi/kelola/{kode_fakultas}'); //pimpinan fakultas only

Route::get('timakreditasi/tambah/{kode_fakultas}', 'PegawaiController@lihatPegawaiIsNotTimAkreditasi')->name('timakreditasi/tambah/{kode_fakultas}'); //pimpinan fakultas only

Route::get('timakreditasi/tambah/tambah/{username}', 'PegawaiController@tambahTimAkreditasi')->name('timakreditasi/tambah/tambah/{username}'); //pimpinan fakultas only

Route::get('timakreditasi/kelola/hapus/{username}', 'PegawaiController@deleteTimAkreditasi')->name('timakreditasi/hapus/{username}'); //pimpinan fakultas only

Route::get('profil/{username}', 'PegawaiController@profilPengguna')->name('profil/{username}');


Route::get('kelolapimpinan/{username}', 'PegawaiController@kelolaPimpinanPage')->name('kelolapimpinan/{username}'); //admin only

Route::get('kelolapimpinan/hapus/{username}', 'PegawaiController@hapusPimpinan')->name('kelolapimpinan/hapus/{username}'); //admin only

Route::post('kelolapimpinan/tambah/{username}/{valuePimpinan}', 'PegawaiController@tambahPimpinan')->name('kelolapimpinan/tambah/{username}/{valuePimpinan}'); //admin only

Route::get('kelolapimpinan/{username}', 'PegawaiController@kelolaPimpinanPage')->name('kelolapimpinan'); //admin only


Route::get('pimpinan', 'PegawaiController@kelolapimpinan')->name('pimpinan'); //admin only

Route::get('3a/standar4', 'PegawaiController@pilihProdi')->name('3a/standar4'); //pimpinan univ only
Route::post('3a/standar4/submit', 'PegawaiController@lihat3a4')->name('3a/standar4/submit'); //pimpinan univ only
Route::get('3a/standar4/{kodeProdi}', 'PegawaiController@lihat3a4')->name('3a/standar4/{kodeProdi}'); 
});

//kalau udah login, ngakses route dibawah ini akan diarahkan ke home
Route::get('/', function () {
    return view('landing');
})->middleware('beranda')->name('/');
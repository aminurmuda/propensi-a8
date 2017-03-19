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

Route::get('timakreditasi/kelola/{kode_fakultas}', 'PegawaiController@lihatPengguna')->name('timakreditasi/kelola/{kode_fakultas}');

Route::get('timakreditasi/tambah/{kode_fakultas}', 'PegawaiController@lihatPegawaiIsNotTimAkreditasi')->name('timakreditasi/tambah/{kode_fakultas}');

Route::get('timakreditasi/tambah/tambah/{username}', 'PegawaiController@tambahTimAkreditasi')->name('timakreditasi/tambah/tambah/{username}');

Route::get('timakreditasi/kelola/hapus/{username}', 'PegawaiController@deleteTimAkreditasi')->name('timakreditasi/hapus/{username}');

Route::get('profil/{username}', 'PegawaiController@profilPengguna')->name('profil/{username}');

Route::get('pimpinan', 'PegawaiController@kelolapimpinan')->name('pimpinan');
});

//kalau udah login, ngakses route dibawah ini akan diarahkan ke home
Route::get('/', function () {
    return view('landing');
})->middleware('beranda')->name('/');
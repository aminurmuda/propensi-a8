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


Route::get('/', function () {
    return view('landing');
});

// Route untuk mengakses halaman khusus
Route::get('login', 'MainController@login');

// Route untuk logout


// Route::get('home', 'MainController@home')->middleware('home')->name('home');

Route::group(['middleware'=>['home']], function() {
Route::get('home', 'MainController@home')->name('home');
Route::get('logout', 'MainController@logout')->name('logout');

Route::get('timakreditasi/{kode_fakultas}', 'PegawaiController@lihatPengguna')->name('timakreditasi/{kode_fakultas}');

Route::get('timakreditasi/tambah/{username}', 'PegawaiController@tambahPengguna')->name('timakreditasi/tambah/{username}');

Route::get('timakreditasi/hapus/{username}', 'PegawaiController@deleteTimAkreditasi')->name('timakreditasi/hapus/{username}');

Route::get('profil/{username}', 'PegawaiController@profilPengguna')->name('profil/{username}');
});

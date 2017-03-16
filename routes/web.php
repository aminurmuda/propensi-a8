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
Route::get('logout', 'MainController@logout');

Route::get('timakreditasi/{kode_fakultas}', 'PegawaiController@lihatPengguna');

Route::get('timakreditasi/tambah/{username}', 'PegawaiController@tambahPengguna');

Route::get('timakreditasi/hapus/{username}', 'PegawaiController@deleteTimAkreditasi');

Route::get('lihatpegawai/{kode_fakultas}', 'PegawaiController@lihatPegawaiIsNotTimAkreditasi');

Route::post('lihatpegawai/{username}', 'PegawaiController@lihatPegawaiIsNotTimAkreditasiByUsername');

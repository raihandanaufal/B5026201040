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
    return view('welcome');
});

Route::get('praktikum1', function () {
    return view('prak1web');
});
Route::get('tugas4', function () {
    return view('tugas4web');
});
Route::get('praktikum2','ViewController@showPraktikum2');
Route::get('hitung','ViewController@faktorial');
Route::post('jawaban','ViewController@hasil');
Route::get('tugasets','ViewController@showEts');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');

//tugas
Route::get('/tugas','TugasController@index');
Route::get('/tugas/tambah','TugasController@tambah');
Route::post('/tugas/store','TugasController@store');
Route::get('/tugas/edit/{id}','TugasController@edit');
Route::post('/tugas/update','TugasController@update');
Route::get('/tugas/hapus/{id}','TugasController@hapus');
Route::get('/tugas/cari','TugasController@cari');

//absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');

//sandal
Route::get('/sandal','SandalController@index');
Route::get('/sandal/tambah','SandalController@tambah');
Route::post('/sandal/store','SandalController@store');
Route::get('/sandal/edit/{id}','SandalController@edit');
Route::post('/sandal/update','SandalController@update');
Route::get('/sandal/hapus/{id}','SandalController@hapus');
Route::get('/sandal/cari','SandalController@cari');
Route::get('/sandal/detail/{id}','SandalController@detail');


<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/siswa','SiswaController@index')->name('siswa');
Route::get('/siswa/create','SiswaController@create')->name('/siswa/create');
Route::post('/siswa/store','SiswaController@store')->name('/siswa/store');
Route::get('/siswa/edit/{id}','SiswaController@edit');
Route::post('/siswa/update/{id}','SiswaController@update');
Route::get('/siswa/destroy/{id}','SiswaController@destroy');


Route::get('/petugas','PetugasController@index')->name('petugas');
Route::get('/petugas/create','PetugasController@create')->name('/petugas/create');
Route::post('/petugas/store','PetugasController@store')->name('/petugas/store');
Route::get('/petugas/edit/{id}','PetugasController@edit');
Route::post('/petugas/update/{id}','PetugasController@update');
Route::get('/petugas/destroy/{id}','PetugasController@destroy');

Route::get('/kelas','KelasController@index')->name('kelas');
Route::get('/kelas/create','KelasController@create')->name('/kelas/create');
Route::post('/kelas/store','KelasController@store')->name('/kelas/store');
Route::get('/kelas/edit/{id}','KelasController@edit');
Route::post('/kelas/update/{id}','KelasController@update');
Route::get('/kelas/destroy/{id}','KelasController@destroy');

Route::get('/spp','SppController@index')->name('spp');
Route::get('/spp/create','SppController@create')->name('/spp/create');
Route::post('/spp/store','SppController@store')->name('/spp/store');
Route::get('/spp/edit/{id}','SppController@edit');
Route::post('/spp/update/{id}','SppController@update');
Route::get('/spp/destroy/{id}','SppController@destroy');

Route::get('/pembayaran','PembayaranController@index')->name('pembayaran');
Route::get('/pembayaran/create','PembayaranController@create')->name('/pembayaran/create');
Route::post('/pembayaran/store','PembayaranController@store');
Route::get('/cari/siswa','PembayaranController@cari')->name('cari');
Route::get('/cary/spp','PembayaranController@cary')->name('cary');
Route::get('/pembayaran/destroy/{id}','PembayaranController@destroy');

Route::get('/pencarian','PencarianController@index')->name('pencarian');
Route::get('/cetak','PencarianController@cetak')->name('cetak');
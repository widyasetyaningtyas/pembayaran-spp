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


Route::get('/rayon','RayonController@index')->name('rayon');
Route::get('/rayon/create','RayonController@create')->name('/rayon/create');
Route::post('/rayon/store','RayonController@store')->name('/rayon/store');
Route::get('/rayon/edit/{id}','RayonController@edit');
Route::post('/rayon/update/{id}','RayonController@update');
Route::get('/rayon/destroy/{id}','RayonController@destroy');
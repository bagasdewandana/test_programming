<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KoleksiController;

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

Route::get('/koleksi', 'KoleksiController@index');
Route::get('/koleksi/cari', 'KoleksiController@cari');
Route::get('/koleksi/tanggal', 'KoleksiController@tanggal');
Route::get('/koleksi/tambah', 'KoleksiController@tambah');
Route::post('/koleksi/insert', 'KoleksiController@insert');
Route::get('/koleksi/edit/{kode_koleksi}', 'KoleksiController@edit');
Route::post('/koleksi/update', 'KoleksiController@update');
Route::get('/koleksi/hapus/{kode_koleksi}', 'KoleksiController@hapus');

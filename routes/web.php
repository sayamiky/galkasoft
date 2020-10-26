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
    return view('index');
});

Route::get('/laporan', 'IndexController@laporan')->name('laporan');
Route::get('/kas', 'IndexController@kas')->name('kas');
Route::get('/tunai', 'IndexController@tunai')->name('tunai');
Route::get('/bank', 'IndexController@bank')->name('bank');
Route::get('/giro', 'IndexController@giro')->name('giro');
Route::get('/peraturan', 'IndexController@peraturan')->name('peraturan');
Route::get('/tautan', 'IndexController@tautan')->name('tautan');
Route::get('/h1', 'IndexController@h1')->name('h1');
Route::get('/h2', 'IndexController@h2')->name('h2');
Route::get('/h3', 'IndexController@h3')->name('h3');
Route::get('/h4', 'IndexController@h4')->name('h4');

Route::get('/penjualan', 'IndexController@penjualan')->name('penjualan');
Route::get('/pembelian', 'IndexController@pembelian')->name('pembelian');
Route::get('/biaya', 'IndexController@biaya')->name('biaya');
Route::get('/kontak', 'IndexController@kontak')->name('kontak');
Route::get('/produk', 'IndexController@produk')->name('produk');
Route::get('/pengaturanaset', 'IndexController@pengaturanaset')->name('pengaturanaset');
Route::get('/daftarakun', 'IndexController@daftarakun')->name('daftarakun');
Route::get('/daftarlain', 'IndexController@daftarlain')->name('daftarlain');
Route::get('/pengaturan', 'IndexController@pengaturan')->name('pengaturan');

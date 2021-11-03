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
    return view('welcome');
});

Route::get('/admin', 'AdminController@admin');

/* Route Tabel Produk*/
Route::get('/admin/produk', 'ProdukController@index');
/* tambah produk*/
Route::get('/admin/produk/addproduk', 'ProdukController@add');
Route::post('/admin/produk', 'ProdukController@store');
Route::get('/admin/produk/{id_produk}/detailproduk', 'ProdukController@detail');
Route::get('/admin/produk/{id_produk}/ubahproduk', 'ProdukController@ubah');
Route::put('/admin/produk/{id_produk}', 'ProdukController@update');
Route::delete('/admin/produk/{id_produk}', 'ProdukController@delete');

/* Route Tabel Pelanggan*/
Route::get('/admin/pelanggan', 'PelangganController@index');





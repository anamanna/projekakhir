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
Route::get('/index','ManajemenProduk\ProdukController@index');

//MANAJEMENT SAMPAH 
Route::get('/indexsampah','SampahController@index');
Route::get('/createsampah','SampahController@create');
Route::get('/editsampah/{id}','SampahController@edit');
Route::post('/updatesampah','SampahController@update');
Route::post('/storesampah','SampahController@store');
Route::get('/destroysampah/{id}','SampahController@destroy');

//MANAJEMENT PRODUK
Route::get('/indexproduk','ProdukController@index');


Route::get('/admin','AdminController@index');


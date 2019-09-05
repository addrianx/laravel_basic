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

// Route::get('/', function () {
//     return view('data/hello');
// });

// Route::get('tentang', function () {
//     $title = 'Halaman About';
//     return view('data/tentang');
// });

// Route::get('kontak', function () {
//     $title = 'Halaman Kontak';
//     return view('data/kontak');
// });

Route::get('/', 'pageController@home');
Route::get('/about', 'pageController@about');

Route::get('/mahasiswa', 'mahasiswaController@home');
Route::get('/tambah', 'mahasiswaController@tambah');
Route::post('/tambah-data', 'mahasiswaController@insert');
Route::get('/mahasiswa/{id}', 'mahasiswaController@index');
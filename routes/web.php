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

Route::get('halaman-2', function () {
    return ('halaman-2');
});

Route::get('halaman-3', function () {
    return ('halaman-3');
});

Route::get('halaman-4/{nama}', function ($nama) {
    return ('halaman profil '.$nama);
});

Route::get('halaman-5/{nama}/jenis-kelamin/{jk}', function ($nama, $jk) {
    return ('Halaman Profil '.$nama.' Dengan Jenis Kelamin '.$jk);
});

Route::get('halaman-6/{nama?}', function ($nama = "Belum ada nama") {
    return ('Halaman Profil '.$nama);
});

Route::get('profile/{nama}', function ($nama) {
    return view('latihan1', compact('nama'));
});
// Route optional parameter
Route::get('pesan/{menu?}', function ($a = "silakan masukan pesanan") {
    return view('pages.pesan', compact('a'));
});

Route::get('pemesanan/{a?}/{b?}/{c?}', function ($a = "silakan masukan pesanan", $b = null, $c = null) {
    return view('pages.pemesanan', compact('a','b','c'));
});

Route::get('hallo', 'LatihanController@hallo');
Route::get('profile', 'LatihanController@profile');
Route::get('facebook/{perkalian}-{nama}', 'LatihanController@facebook');
Route::get('siswa', 'LatihanController@siswa');
Route::get('berat/{berat}/{tinggi}', 'LatihanController@berat');
Route::get('dosen', 'LatihanController@dosen');
Route::get('dosen2', 'LatihanController@dosen2');
Route::get('sekolah', 'LatihanController@sekolah');
Route::get('belanjaan', 'LatihanController@belanjaan');
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
    return view('pages.home.index');
});

Route::resource('dosen', 'DosenController');
Route::resource('matakuliah', 'MatakuliahController');
Route::resource('jadwal', 'JadwalController');
Route::resource('ruang', 'RuangController');
Route::resource('mahasiswa', 'MahasiswaController');

Route::any('ajax/{page}', function ($page) {
    $app = app();
    return App::call('App\Http\Controllers\\'.studly_case($page).'Controller@ajax');
});

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
    return view('pages.dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('/karyawan', 'Admin\KaryawanController');
Route::get('/karyawan', 'Admin\AdminController@indexKaryawan')->name('karyawan');
Route::get('/jabatan', 'Admin\AdminController@indexJabatan')->name('jabatan');
Route::get('/pendidikan', 'Admin\AdminController@indexPendidikan')->name('pendidikan');
Route::get('/status', 'Admin\AdminController@indexStatus')->name('status');


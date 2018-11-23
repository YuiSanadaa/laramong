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

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::resource('pemohon', 'PemohonController');
Route::prefix('pemohon')->group(function () {
	Route::get('/verifikasi/{id}', 'PemohonController@verifikasi')->name('verifikasi');
	Route::post('/verifikasi/lanjut/{id}', 'PemohonController@lanjut')->name('lanjut');
        // Matches The "/admin/users" URL
});

Route::prefix('sim')->group(function () {
	Route::get('/signatures/{id}', 'SimController@signature');
	Route::post('pdf', 'SimController@kartu')->name('kartu');
	Route::get('pdf/{id}', 'SimController@pdf' );
});
Route::resource('sim', 'SimController');


Route::post('ttd/{id}', 'SimController@ttd')->name('ttd');


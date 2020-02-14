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
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');
	
Route::get('/home', function () {
	return redirect()->route('home');
});

	// ROUTE HALAMAN NERACA
	Route::resource('neraca','NeracaController');
	Route::get('cetak-neraca/{id}', 'NeracaController@cetak');

	// ROUTE HALAMAN NOMINATIF
	Route::resource('nominatif','NominatifController');
	Route::match(['get', 'put'], 'download-rekon', 'NominatifController@download');
	Route::match(['get', 'put'], 'download-nominatif', 'NominatifController@export');
	Route::match(['get', 'put'], 'derrorpeg', 'NominatifController@drekonError');
	
	Route::get('rekon', 'NominatifController@halRekon');
	Route::match(['post', 'put'], 'nominatif/rekons', 'NominatifController@rekons');

	Route::resource('pengaturan-akun','PengaturanAkunController');

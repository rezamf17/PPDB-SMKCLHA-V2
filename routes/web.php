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
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', function(){
// 	return view ('Auth.login');
// });
Route::get('/pemberitahuan', 'AdminController@pemberitahuan')->name('pemberitahuan');
Route::get('/caraDaftar', 'AdminController@cara_daftar')->name('caraDaftar');
Auth::routes();
// Route::get('/admin', ['HomeController@admin'])->name('admin')->middleware('role');
// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'role:1']], function(){
	Route::get('/admin', 'HomeController@admin')->name('admin');
	Route::post('/admin', 'HomeController@adminAdd');
	Route::get('/calonsiswa', 'AdminController@index')->name('calonsiswa');
	Route::get('/pengumuman', 'AdminController@pengumuman')->name('pengumuman');
	Route::get('/pengumuman/buatPengumuman', 'AdminController@buatPengumuman')->name('buatPengumuman');
	Route::post('/pengumuman/buatPengumuman', 'AdminController@addPengumuman');
	Route::get('/pengumuman/editPengumuman/{id}', 'AdminController@editPengumuman');
	Route::delete('/pengumuman/{id}', 'AdminController@hapusPengumuman');
	Route::get('/dashboard', 'AdminController@dashAdmin')->name('dashboard');
	Route::get('/admin/editAdmin/{id}', 'HomeController@edit');
	Route::patch('/admin/{id}', 'HomeController@editProcess');
	Route::delete('/admin/{id}', 'HomeController@delete');
	Route::get('viewCalonSiswa/{id}', 'CalonSiswaController@viewCalonSiswa')->name('viewCalonSiswa');
	Route::get('cetak/{id}', 'AdminController@cetakSiswa')->name('cetak');
	Route::get('cetakDataAkun', 'AdminController@cetak_data_akun')->name('cetakDataAkun');
	Route::get('cetakCalonSiswa', 'AdminController@cetak_data_siswa')->name('cetakCalonSiswa');
	Route::get('exportDataAkun', 'AdminController@dataAkun_export')->name('exportDataAkun');
	Route::get('exportDataSiswa', 'AdminController@dataSiswa_export')->name('exportDataSiswa');
	// Route::get('/home', 'HomeController@index')->name('home');
});
Route::group(['middleware' => ['auth', 'role:2']], function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/formulir', 'CalonSiswaController@index')->name('formulir');
	Route::post('/formulir', 'CalonSiswaController@formulirAdd');
	Route::get('/cetak', 'CalonSiswaController@Cetakformulir')->name('cetak');
	Route::resource('forms', 'FormController');
	Route::get('/gantiFormulir', 'CalonSiswaController@editFormulir')->name('gantiFormulir');
	Route::patch('/gantiFormulir', 'CalonSiswaController@editFormProcess')->name('gantiFormulir');
	Route::get('/pengumumanSiswa', 'CalonSiswaController@pengumumanSiswa')->name('pengumumanSiswa');
	// Route::get('/admin', 'HomeController@admin')->name('admin');
});

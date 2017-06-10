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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/testmodel', function(){
	$a = App\blog::all();
	return $a;
});

Route::get('/produk', function(){
	$b = App\produk::all();
	return $b;
});

Route::get('/pengguna', function(){
	$c = App\pengguna::all();
		return $c;
});

Route::get('/pengaturan', function(){
	$d = App\pengaturan::all();
	$c = App\pengguna::all();
	$b = App\produk::all();
	return $d.$c.$b;

});
Route::get('/test','MyController@percobaan');
Route::get('/test2','MyController@percobaan2');
Route::get('/test3','MyController@percobaan3');
Route::get('/test4','MyController@percobaan4');
Route::get('/param/{data?}/{data2?}','MyController@param');
Route::get('/test4','MyController@percobaan4');
Route::get('/test1','siswaController@percobaan1');
Route::resource('coba','CobaController');


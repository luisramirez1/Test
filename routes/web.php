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
use App\Areas;

Route::get('/', function () {

	$areas = Areas::all();

    return view('inicio', compact('areas'));
});

Auth::routes();

Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['admin']], function () {
	
});

Route::group(['middleware' => ['auth']], function () {

});

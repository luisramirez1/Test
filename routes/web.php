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
Route::get('/areas/{id}', 'TestController@areas');

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['admin']], function () {
	Route::get('/consultaUsuarios', 'TestController@consultarU');
});

Route::group(['middleware' => ['auth']], function () {
	
	Route::get('/test', 'TestController@test');
	Route::get('/resultados/{idU}/{idP}', 'TestController@resultados');
	Route::post('/enviarTest', 'TestController@enviarTest');
	Route::get('/editar/{id}', 'TestController@editar');
	Route::post('/actualizar/{id}', 'TestController@actualizar');
	Route::get('/vistaRapida/{id}', 'TestController@vistaRapida');
  	Route::get('/generarPDF/{idU}/{idP}', 'TestController@generarPDF');
  	Route::get('/eliminarUsuariosI/{id}', 'TestController@eliminarUI');
});

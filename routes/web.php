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

Auth::routes();

Route::get('/', 'HomeController@index')->name('inicio');

Route::group(['middleware' => 'auth'], function()
{
	Route::get('/', 'HomeController@index');
	
	Route::resource('estudiantes', 'estudianteController');

	Route::get('approvedAccess/{id}', 'estudianteController@approvedAccess')->name('approvedAccess');

	Route::resource('representantes', 'representanteController');

	Route::resource('boletas', 'boletaController');

	Route::resource('grados', 'gradoController');

	Route::resource('seccions', 'seccionController');

	Route::resource('users', 'usersController');

	Route::get('documentation/{seccion}', 'HomeController@documentation')->name('documentation');

	Route::get('search/{string}', 'estudianteController@search')->name('search');

	Route::get('reporte', 'reporteController@reporte')->name('reporte');

});

	Route::get('/representante/estudiantes','estudianteController@representante')->name('estudiantes.representante');

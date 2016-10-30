<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/ind', function () {
    return view('main');
});
*/
Route::get('/ind', 'Controller@show_index');

Route::get('/animal_add', function () {
    return view('animales.addAnimales');
});

Route::get('/refugio_add', function () {
    return view('refugios.add_modify_refugio');
});

Route::get('/refugio_user_add', function () {
    return view('refugios.add_modify_user_refugio');
});

Auth::routes();

Route::post('/guardar_animal', 'MascotasController@store');

Route::get('/{mascota}/modificar_animal/', 'MascotasController@edit');

Route::post('/{mascota}/guardar_animal/', 'MascotasController@update');

Route::get('/{mascota}/eliminar_animal/', 'MascotasController@destroy');

Route::get('/animales', 'MascotasController@show_all');

Route::post('/guardar_refugio_user', 'RefugiosController@store_refugio');

Route::post('/guardar_refugio', 'RefugiosController@store');

Route::get('/{refugio}/modificar_refugio/', 'RefugiosController@edit');

Route::post('/{refugio}/guardar_refugio/', 'RefugiosController@update');

Route::get('/{refugio}/eliminar_refugio/', 'RefugiosController@destroy');

Route::get('/refugios', 'RefugiosController@show_all');

Route::get('/refugio_mascotas', 'RefugiosController@show_all_refugio');

Route::get('/home', 'HomeController@index');

// NOTICIAS
Route::resource('/noticias', 'NoticiasController');
Route::post('/noticia', 'NoticiasController@store');

Auth::routes();

Route::get('/home', 'HomeController@index');

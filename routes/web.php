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

Route::get('/','UserController@index')
->name('index');

Route::get('/Registro','UserController@register')
->name('user.registro');

Route::get('/Configuracion', 'UserController@config')
->name('user.configuracion');

Route::get('/perfil/{name}','UserController@perfil')
->name('user.perfil');

Route::get('/lista/proyectos','PubliController@proyectolista')
->name('proyectos');

Route::get('/proyecto/{name}','PubliController@proyecto')
->name('proyecto');

Route::get('/buscar/','PubliController@buscar')
->name('buscador');
;

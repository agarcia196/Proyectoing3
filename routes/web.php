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
Route::get('/','UserCrl@index');

Route::get('/Registro','UserCrl@register');

Route::get('/Configuracion', 'UserCrl@config');

Route::get('/{name}','UserCrl@perfil');

Route::get('/proyecto/{name}','PublicCrl@proyecto');

Route::get('/buscar/','PublicCrl@buscar');
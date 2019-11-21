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

Route::get('/', 'IndexController@index');
Route::get('/cronometro', 'CronometragemController@index');
Route::get('/relatorio', 'RelatorioController@index');
Route::get('/login', 'LoginController@index');
Route::get('/register', 'LoginController@register');

//CRUD's
Route::resource('operacao', 'OperacaoController');
Route::resource('usuario', 'UsuarioController');
Route::resource('produto', 'ProdutoController');
Route::resource('elemento', 'ElementoController');
Route::resource('tomadaTempo', 'TomadaTempoController');
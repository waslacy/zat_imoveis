<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/quem-somos', 'QuemSomosController@index');
Route::get('/captacao', 'CaptacaoController@index');
Route::get('/contato', 'ContatoController@index');

Route::get('{/regiao}', 'ImoveisController@regiao');
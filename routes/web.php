<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/quem-somos', 'QuemSomosController@index');
Route::get('/captacao', 'CaptacaoController@index');
Route::get('/contato', 'ContatoController@index');

Route::get('{/regiao}', 'ImoveisController@regiao');

Route::get('/login', 'AdminController@login');
Route::post('/auth', 'AdminController@auth');

Route::group(['prefix' => '/admin'], function (){
    Route::get('/', 'AdminController@index');
    
    Route::get('/imoveis', 'AdminImoveisController@indexImovel');
    Route::get('/imoveis/{id}', 'AdminImoveisController@cadastroImovel');
    Route::post('/imoveis/{id}', 'AdminImoveisController@saveImovel');
    Route::get('/imoveis/{id}/delete', 'AdminImoveisController@deleteImovel');

    Route::get('/caracteristicas-imoveis', 'AdminImoveisController@indexCaracteristicaImovel');
    Route::post('/caracteristicas-imoveis/{id}', 'AdminImoveisController@saveCaracteristicaImovel');
    Route::get('/caracteristicas-imoveis/{id}/delete', 'AdminImoveisController@deleteCaracteristicaImovel');

    Route::get('/tipos-imoveis', 'AdminImoveisController@indexTipo');
    Route::post('/tipos-imoveis/{id}', 'AdminImoveisController@saveTipo');
    Route::get('/tipos-imoveis/{id}/delete', 'AdminImoveisController@deleteTipo');

    Route::get('/condominios', 'AdminCondominiosController@indexCondominio');
    Route::get('/condominios/{id}', 'AdminCondominiosController@cadastroCondominio');
    Route::post('/condominios/{id}', 'AdminCondominiosController@saveCondominio');
    Route::get('/condominios/{id}/delete', 'AdminCondominiosController@deleteCondominio');

    Route::get('/caracteristicas-condominios', 'AdminCondominiosController@indexCaracteristicaCondominio');
    Route::post('/caracteristicas-condominios/{id}', 'AdminCondominiosController@saveCaracteristicaCondominio');
    Route::get('/caracteristicas-condominios/{id}/delete', 'AdminCondominiosController@deleteCaracteristicaCondominio');

    Route::get('/proprietarios', 'AdminProprietariosController@index');
    Route::post('/proprietarios/{id}', 'AdminProprietariosController@save');
    Route::get('/proprietarios/{id}/delete', 'AdminProprietariosController@delete');

    Route::get('/regioes', 'AdminRegioesController@index');
    Route::post('/regioes/{id}', 'AdminRegioesController@save');
    Route::get('/regioes/{id}/delete', 'AdminRegioesController@delete');
});
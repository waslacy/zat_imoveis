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

    Route::group(['prefix' => '/imoveis'], function(){
        Route::get('/', 'AdminImoveisController@indexImovel');
        Route::post('/filtro', 'AdminImoveisController@filtrarImovel');
        Route::get('/{id}', 'AdminImoveisController@cadastrarImovel');
        Route::post('/{id}', 'AdminImoveisController@saveImovel');
        Route::get('/{id}/delete', 'AdminImoveisController@deleteImovel');
    });

    Route::group(['prefix' => '/caracteristicas-imoveis'], function(){
        Route::get('/', 'AdminImoveisController@indexCaracteristicaImovel');
        Route::post('/{id}', 'AdminImoveisController@saveCaracteristicaImovel');
        Route::get('/{id}/delete', 'AdminImoveisController@deleteCaracteristicaImovel');
    });

    Route::group(['prefix' => '/tipos-imoveis'], function(){
        Route::get('/', 'AdminImoveisController@indexTipo');
        Route::post('/{id}', 'AdminImoveisController@saveTipo');
        Route::get('/{id}/delete', 'AdminImoveisController@deleteTipo');
    });

    Route::group(['prefix' => '/condominios'], function(){
        Route::get('/', 'AdminCondominiosController@indexCondominio');
        Route::post('/{id}', 'AdminCondominiosController@saveCondominio');
        Route::get('/{id}/delete', 'AdminCondominiosController@deleteCondominio');
    });

    Route::group(['prefix' => '/caracteristicas-condominios'], function(){
        Route::get('/', 'AdminCondominiosController@indexCaracteristicaCondominio');
        Route::post('/{id}', 'AdminCondominiosController@saveCaracteristicaCondominio');
        Route::get('/{id}/delete', 'AdminCondominiosController@deleteCaracteristicaCondominio');
    });

    Route::group(['prefix' => '/proprietarios'], function(){
        Route::get('/', 'AdminProprietariosController@index');
        Route::post('/{id}', 'AdminProprietariosController@save');
        Route::get('/{id}/delete', 'AdminProprietariosController@delete');
    });

    Route::group(['prefix' => '/regioes'], function(){
        Route::get('/', 'AdminRegioesController@index');
        Route::post('/{id}', 'AdminRegioesController@save');
        Route::get('/{id}/delete', 'AdminRegioesController@delete');
    });
});
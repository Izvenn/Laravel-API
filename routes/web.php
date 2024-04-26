<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/produtos', 'App\Http\Controllers\ProdutoApiController@index'); // Obter lista de produtos
Route::post('/produtos', 'App\Http\Controllers\ProdutoApiController@store'); // Criar um novo produto
Route::get('/produtos/{id}', 'App\Http\Controllers\ProdutoApiController@show'); // Obter um produto específico
Route::put('/produtos/{id}', 'App\Http\Controllers\ProdutoApiController@update'); // Atualizar um produto
Route::delete('/produtos/{id}', 'App\Http\Controllers\ProdutoApiController@delete');

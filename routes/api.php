<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/caminhoneiros', 'CaminhoneiroController@index')->name('caminhoneiros');
Route::post('/caminhoneiros', 'CaminhoneiroController@store')->name('caminhoneiros.store');
Route::put('/caminhoneiros/{id}', 'CaminhoneiroController@update')->name('caminhoneiros.update');
Route::get('/caminhoneiros/vazios', 'CaminhoneiroController@getVazios')->name('caminhoneiros.vazios');
Route::get('/caminhoneiros/carregados_dia', 'CaminhoneiroController@getCarregadosDia')->name('caminhoneiros.carregados_dia');
Route::get('/caminhoneiros/carregados_semana', 'CaminhoneiroController@getCarregadosSemana')->name('caminhoneiros.carregados_semana');
Route::get('/caminhoneiros/carregados_mes', 'CaminhoneiroController@getCarregadosMes')->name('caminhoneiros.carregados_mes');
Route::get('/caminhoneiros/veiculos_proprios', 'CaminhoneiroController@getVeiculosProprios')->name('caminhoneiros.veiculos_proprios');
Route::get('/caminhoneiros/origem_destino', 'CaminhoneiroController@getOrigemDestino')->name('caminhoneiros.origem_destino');

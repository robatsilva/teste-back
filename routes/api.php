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

Route::get('/caminhoneiros', 'CaminhoneiroController@index');
Route::post('/caminhoneiros', 'CaminhoneiroController@store');
Route::put('/caminhoneiros/{id}', 'CaminhoneiroController@update');
Route::get('/caminhoneiros/vazios', 'CaminhoneiroController@getVazios');
Route::get('/caminhoneiros/carregados_dia', 'CaminhoneiroController@getCarregadosDia');
Route::get('/caminhoneiros/carregados_semana', 'CaminhoneiroController@getCarregadosSemana');
Route::get('/caminhoneiros/carregados_mes', 'CaminhoneiroController@getCarregadosMes');
Route::get('/caminhoneiros/veiculos_proprios', 'CaminhoneiroController@getVeiculosProprios');
Route::get('/caminhoneiros/origem_destino', 'CaminhoneiroController@getOrigemDestino');

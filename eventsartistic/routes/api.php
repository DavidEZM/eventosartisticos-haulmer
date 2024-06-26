<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//RUTES API CLIENTS
Route::get('/clients', 'App\Http\Controllers\ClientController@index');
Route::post('/clients', 'App\Http\Controllers\ClientController@store');
Route::get('/clients/{client}', 'App\Http\Controllers\ClientController@show');
Route::put('/clients/{client}', 'App\Http\Controllers\ClientController@update');
Route::delete('/clients/{client}', 'App\Http\Controllers\ClientController@destroy');

//ROUTES API EVENTS
Route::get('/events', 'App\Http\Controllers\EventController@index');
Route::post('/events', 'App\Http\Controllers\EventController@store');
Route::get('/events/{event}', 'App\Http\Controllers\EventController@show');
Route::put('/events/{event}', 'App\Http\Controllers\EventController@update');
Route::delete('/events/{event}', 'App\Http\Controllers\EventController@destroy');

//ROUTES API ORDERS
Route::post('/clients/ticket', 'App\Http\Controllers\ClientController@attach');
Route::get('/clients/ticket/{ticket}', 'App\Http\Controllers\ClientController@show');
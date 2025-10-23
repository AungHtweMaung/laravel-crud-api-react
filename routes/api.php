<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/blogs', 'App\Http\Controllers\Api\BlogController@index');
Route::post('/blogs', 'App\Http\Controllers\Api\BlogController@store');
Route::get('/blogs/{id}', 'App\Http\Controllers\Api\BlogController@show');
Route::put('/blogs/{blog}', 'App\Http\Controllers\Api\BlogController@update');
Route::delete('/blogs/{blog}', 'App\Http\Controllers\Api\BlogController@destroy');

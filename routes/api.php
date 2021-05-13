<?php

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

Route::post('login',[\App\Http\Controllers\LoginController::class,'login']);
Route::middleware('auth:sanctum')->resource('user', \App\Http\Controllers\UserController::class);

/*Route::get('user', [\App\Http\Controllers\UserController::class, 'index']);
Route::post('user', [\App\Http\Controllers\UserController::class, 'store']);*/


/*Route::get('req', [\App\Http\Controllers\RequerimientoController::class, 'index']);|
Route::post('req', [\App\Http\Controllers\RequerimientoController::class, 'store']);
//Route::get('req', [\App\Http\Controllers\RequerimientoController::class, 'show']);
Route::put('req', [\App\Http\Controllers\RequerimientoController::class, 'update']);
Route::put('req', [\App\Http\Controllers\RequerimientoController::class, 'update']);*/

Route::resource('req', \App\Http\Controllers\RequerimientoController::class);

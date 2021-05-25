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

Route::middleware('auth:sanctum')->resource('municipio', \App\Http\Controllers\MunicipioController::class);
Route::middleware('auth:sanctum')->resource('q', \App\Http\Controllers\CalificacionController::class);
Route::middleware('auth:sanctum')->resource('ticket', \App\Http\Controllers\TicketController::class);
Route::middleware('auth:sanctum')->resource('estado', \App\Http\Controllers\EstadoController::class);
Route::middleware('auth:sanctum')->resource('prioridad', \App\Http\Controllers\PrioridadController::class);
Route::middleware('auth:sanctum')->resource('cat', \App\Http\Controllers\CategoriaController::class);
Route::middleware('auth:sanctum')->resource('tipo', \App\Http\Controllers\TiporequerimientoController::class);
Route::middleware('auth:sanctum')->resource('sucursal', \App\Http\Controllers\SucursalController::class);
Route::middleware('auth:sanctum')->resource('dpto', \App\Http\Controllers\DepartamentoController::class);
Route::middleware('auth:sanctum')->resource('dptoSuc', \App\Http\Controllers\DepartamentoSucursalController::class);
/*Route::middleware('auth:sanctum')->resource('cargo', \App\Http\Controllers\CargoController::class);*/
Route::middleware('auth:sanctum')->resource('req', \App\Http\Controllers\RequerimientoController::class);
Route::middleware('auth:sanctum')->resource('calTickUser', \App\Http\Controllers\CalificacionTicketUsuarioController::class);
/*Route::middleware('auth:sanctum')->resource('rol', \App\Http\Controllers\RoleController::class);*/

Route::middleware('auth:sanctum')->get('filtro/{id}', [\App\Http\Controllers\SucursalController::class, 'filtro']);
Route::middleware('auth:sanctum')->get('filtrocat/{id}', [\App\Http\Controllers\TipoRequerimientoController::class, 'filtro']);
Route::middleware('auth:sanctum')->get('logout', [\App\Http\Controllers\LoginController::class, 'logout']);

Route::resource('rol', \App\Http\Controllers\RoleController::class);
Route::resource('cargo', \App\Http\Controllers\CargoController::class);
Route::resource('registro', \App\Http\Controllers\UserController::class);

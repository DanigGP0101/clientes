<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registros', [\App\Http\Controllers\RegistrosController::class, 'index']);
Route::post('/registros', [\App\Http\Controllers\RegistrosController::class, 'save']);
Route::get('/registros/create', [\App\Http\Controllers\RegistrosController::class, 'create']);
Route::get('/registros/{id}', [\App\Http\Controllers\RegistrosController::class, 'edit']);
Route::post('/registros/update', [\App\Http\Controllers\RegistrosController::class, 'update']);
Route::get('/registros/state/{id}', [\App\Http\Controllers\RegistrosController::class, 'update_state']);

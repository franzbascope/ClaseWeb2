<?php

use App\Http\Controllers\PersonaController;
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

Route::get('/test',[\App\Http\Controllers\TestController::class,"index"]);
Route::post('/test',[\App\Http\Controllers\TestController::class,"save"]);

Route::get('personas',[PersonaController::class,"index"]);
Route::post('personas',[PersonaController::class,"store"]);
Route::get('personas/create',[PersonaController::class,"create"]);

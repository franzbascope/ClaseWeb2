<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('materias', \App\Http\Controllers\MateriaController::class);
Route::get('estudiantes/{id}',[\App\Http\Controllers\MateriaController::class,"estudiantes"])->name("materias.estudiantes");
Route::resource('students', \App\Http\Controllers\StudentController::class);
Route::get('students/notas/{id}',[\App\Http\Controllers\StudentController::class,"notas"])->name("students.notas");
Route::get('student/materias/{id}',[\App\Http\Controllers\StudentController::class,"materias"])->name("students.materias");
Route::middleware(["auth"])->group(function () {


});

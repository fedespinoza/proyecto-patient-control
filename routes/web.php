<?php

use App\Http\Controllers\AgregarObraSocialController;
use App\Http\Controllers\AgregarPacienteController;
use App\Http\Controllers\BuscarObraSocialController;
use App\Http\Controllers\BuscarPacienteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\SinglePatientController;
use App\Http\Controllers\WorkSocialController;
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


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', HomeController::class)->name('home');
});

// Route::get('home', HomeController::class)->name('home');
Route::get('buscar-paciente', BuscarPacienteController::class)->name('buscar-paciente')->middleware('auth');
Route::get('buscar-obra-social', BuscarObraSocialController::class)->name('buscar-obra-social')->middleware('auth');
Route::get('agregar-paciente', AgregarPacienteController::class)->name('agregar-paciente')->middleware('auth');
Route::get('agregar-obra-social', AgregarObraSocialController::class)->name('agregar-obra-social')->middleware('auth');
Route::get('paciente', PacienteController::class)->name('paciente')->middleware('auth');

Route::resource('patient', SinglePatientController::class)->middleware('auth');
Route::resource('os', WorkSocialController::class)->middleware('auth');

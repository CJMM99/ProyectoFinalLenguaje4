<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\DoctorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/indexpaciente', [PacienteController::class, 'index'])->name('pacientes.indexpaciente');
Route::get('/indexdoctor', [DoctorController::class, 'index'])->name('doctores.indexdoctor');

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pacientes', PacienteController::class);
Route::resource('doctores', DoctorController::class);


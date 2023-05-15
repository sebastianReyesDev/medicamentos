<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicamentosController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\PersonalMedicoController;
use App\Http\Controllers\SignosVitalesController;
use App\Http\Controllers\TratamientoController;
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

Route::get('/', function(){
    return view('index');
});

Route::resource('medicamentos', MedicamentosController::class);
Route::resource('consulta', ConsultaController::class);
Route::resource('personalMedico', PersonalMedicoController::class);
Route::resource('signosVitales', SignosVitalesController::class);
Route::resource('tratamiento', TratamientoController::class);

//Route::get('/consulta/view', [ConsultaController::class, 'index']);

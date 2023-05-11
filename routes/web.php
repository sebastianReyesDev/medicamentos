<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicamentosController;
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
//Menu
/*
Route::get('/', function(){
    return view('principal');
});
*/
Route::resource('medicamentos', MedicamentosController::class);
//Route::get('/medicamentos/create', [MedicamentosController::class, 'create']);
//Route::get('/medicamentos/read', [MedicamentosController::class, 'read']);

//score.blade.php
//Route::get('/medicamentos/create', function(){return view('medicamentos.score');});
//Route::post('/medicamentos/create', [MedicamentosController::class, 'score'])->name('medicamentos.score');

//complete.blade.php
//Route::get('/medicamentos/complete', function () {return view('medicamentos.complete');})->name('medicamentos.complete');

//update.blade.php
//Route::put('/medicamentos/update/{id}', [MedicamentosController::class, 'update'])->name('medicamentos.update');

//edit.blade.php
//Route::get('/medicamentos/read', [MedicamentosController::class, 'edit'])->name('medicamentos.edit');

//destroy from edit
//Route::delete('/medicamentos/{id}', [MedicamentosController::class, 'destroy'])->name('medicamentos.destroy');

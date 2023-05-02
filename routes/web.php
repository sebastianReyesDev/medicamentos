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



Route::get('/medicamentos/create', function(){return view('medicamentos.score');});
//Route::post('/medicamentos', [MedicamentosController::class, 'score'])->name('medicamentos.score');
Route::post('/medicamentos/score', [MedicamentosController::class, 'score'])->name('medicamentos.score');
Route::get('/medicamentos/createComplete', function () {
    return view('medicamentos.createComplete');
})->name('medicamentos.createComplete');
Route::put('/medicamentos/{medicamento}', [MedicamentosController::class, 'update'])->name('medicamentos.update');
Route::get('/medicamentos/read', [MedicamentosController::class, 'edit'])->name('medicamentos.edit');
//Route::post('/medicamentos', [MedicamentosController::class, 'principal.score'])->name('medicamentos');
//Route::post('/medicamentos', [MedicamentosController::class, 'store'])->name('medicamentos.store');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ViajeroController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/viajero',[ViajeroController::class,'create']);
Route::get('viajero/menu',[ViajeroController::class,'index'])->name('viajero.index');
Route::post('/viajero', [ViajeroController::class,'store'])->name('viajero.store');


Route::get('/viajero/{viajero}',[ViajeroController::class,'show'])->name('viajero.show');
Route::delete('/viajero/{viajero}',[ViajeroController::class,'destroy'])->name('viajero.destroy');
Route::put('/viajero/{viajero}',[ViajeroController::class,'update'])->name('viajero.update');
Route::get('/viajero/{viajero}/editar',[ViajeroController::class,'edit'])->name('viajero.edit');

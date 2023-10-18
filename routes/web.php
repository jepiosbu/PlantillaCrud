<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/',[UsuarioController::class,'create'])->name('registrar');
Route::post('/store',[UsuarioController::class,'store'])->name('guardar');
Route::get('/show',[UsuarioController::class,'index'])->name('mostrar');
Route::get('/edit/{id}', [UsuarioController::class,'edit'])->name('editar');
Route::put('/update/{id}', [UsuarioController::class,'update'])->name('actualizar');
Route::delete('/delete/{id}', [UsuarioController::class,'destroy'])->name('detele');

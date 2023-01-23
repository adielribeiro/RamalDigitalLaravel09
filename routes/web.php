<?php

use App\Http\Controllers\ListaRamaisController;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Collection;


Route::get('/ramais', [ListaRamaisController::class,'listaramais']);

Route::get('/ramais/visualizar/{id}', [ListaRamaisController::class,'visualizar']);

Route::get('/ramais/novo', [ListaRamaisController::class,'novo']);

Route::post('/ramais/adciona', [ListaRamaisController::class,'adciona']);

Route::get('/ramais/remover/{id}', [ListaRamaisController::class,'remover']);






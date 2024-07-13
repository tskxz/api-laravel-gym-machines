<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MusculoController;
use App\Http\Controllers\Api\MaquinaController;
use App\Http\Controllers\Api\MarcaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware(['auth'])->group(function () {
    Route::apiResource('musculo', MusculoController::class)->except([
        'create', 'edit'
    ]);
});



Route::apiResource('maquina', MaquinaController::class)->except(['create', 'edit']);

Route::apiResource('marca', MarcaController::class)->except(['create', 'edit']);
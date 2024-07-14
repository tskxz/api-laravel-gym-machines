<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MusculoController;
use App\Http\Controllers\Api\MaquinaController;
use App\Http\Controllers\Api\MarcaController;

Route::middleware('auth:sanctum')->group(function () {
    // Add your protected API routes here
    // For example:
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});

Route::apiResource('musculo', MusculoController::class)->except([
    'create', 'edit'
]);

Route::apiResource('maquina', MaquinaController::class)->except(['create', 'edit'])->middleware('auth:sanctum');

Route::apiResource('marca', MarcaController::class)->except(['create', 'edit']);

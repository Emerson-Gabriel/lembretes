<?php

use App\Http\Controllers\LembreteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* LEMBRETES */
Route::get('lembretes', [LembreteController::class, 'index']);
Route::get('lembrete/{id}', [LembreteController::class, 'show']);
Route::post('lembrete', [LembreteController::class, 'store']);
Route::put('lembrete/{id}', [LembreteController::class, 'update']);
Route::delete('lembrete/{id}', [LembreteController::class,'destroy']);
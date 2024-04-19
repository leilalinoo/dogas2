<?php

use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\TesztController;
use App\Models\Teszt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/kategoriak', [KategoriaController::class, 'kategoriak']);
Route::get('/tesztek', [TesztController::class, 'tesztek']);
Route::get('/teszt_ket/{katId}', [TesztController::class, 'teszt_kat']);

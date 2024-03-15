<?php

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

Route::get('/user', [\App\Http\Controllers\User\GetUserController::class, 'getUser'])
    ->middleware(['auth:sanctum']);

Route::prefix('auth')->group(function () {
    Route::get('token', [\App\Http\Controllers\Auth\TokenController::class, 'store']);
});

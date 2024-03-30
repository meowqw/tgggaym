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

Route::prefix('auth')->group(static function () {
    Route::get('token', [\App\Http\Controllers\Auth\TokenController::class, 'store']);
});

Route::get('menu', [\App\Http\Controllers\GameInterface\MenuItemController::class, 'index']);

Route::get('locations', [\App\Http\Controllers\Location\LocationController::class, 'getAvailableLocations']);
Route::get('location/{id}', [\App\Http\Controllers\Location\LocationController::class, 'show']);

Route::middleware(['auth:sanctum'])->prefix('character')->group(static function () {
    Route::post('',[\App\Http\Controllers\Character\CharacterController::class, 'store']);
    Route::get('/',[\App\Http\Controllers\Character\CharacterController::class, 'show']);

    Route::get('factions', [\App\Http\Controllers\CharacterAppearance\FactionController::class, 'index']);
    Route::get('genders', [\App\Http\Controllers\CharacterAppearance\GenderController::class, 'index']);
    Route::get('hairs', [\App\Http\Controllers\CharacterAppearance\HairController::class, 'index']);
    Route::get('hair/colors', [\App\Http\Controllers\CharacterAppearance\HairController::class, 'getHairColors']);

    Route::get('appearance/preset',
        [\App\Http\Controllers\CharacterAppearance\CharacterAppearancePresetController::class, 'getPreset']
    );
});



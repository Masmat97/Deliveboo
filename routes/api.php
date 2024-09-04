<?php

use App\Http\Controllers\Api\RestaurantController;
use App\Http\Controllers\Api\TypeController;
use App\Models\Restaurant;
use Database\Seeders\RestaurantSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('restaurants', [RestaurantController::class, 'index']);
Route::get('types', [TypeController::class, 'index']);

Route::get('restaurants/{id}', [RestaurantController::class, 'show']);
Route::get('types/{type}', [TypeController::class, 'show']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

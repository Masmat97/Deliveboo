<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\Admin\DishController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])
    ->prefix('admin') // Definisce il prefisso "admin/" per le rotte di questo gruppo
    ->name('admin.') // Definisce il pattern con cui generare i nomi delle rotte cioè "admin.qualcosa"
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('/restaurants', RestaurantController::class);
        Route::resource('/dishes', DishController::class); // Aggiunta la route per gestire i piatti
        Route::get('/search', [RestaurantController::class, 'search'])->name('restaurants.search'); // Route per la ricerca dei ristoranti
    });

require __DIR__ . '/auth.php';
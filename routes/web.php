<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DishController;
use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Models\Restaurant;

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
        Route::resource('/dishes', DishController::class);

        // Rotte per gestire gli ordini
        Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
        Route::patch('/orders/{order}/status/{status}', [OrderController::class, 'updateStatus'])->name('orders.updateStatus');
    });

// Rotte per gestire il carrello
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{dish}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{dish}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
Route::get('/get-cart-total', [CartController::class, 'getTotal']); // Corretto

// Rotte per gestire il pagamento
// Rotta per ottenere il token di pagamento
Route::get('/payment/token', [PaymentController::class, 'generateToken'])->name('payment.token');

// Rotta per visualizzare la pagina di checkout
Route::get('/checkout', [PaymentController::class, 'showCheckout'])->name('checkout.show');

// Rotta per processare il pagamento
Route::post('/checkout', [PaymentController::class, 'checkout'])->name('checkout.process');

require __DIR__ . '/auth.php';

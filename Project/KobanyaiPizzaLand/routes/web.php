<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SalesController;

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});

// routes/web.php

Route::get('/', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home.view');
Route::get('/pizzas', [PizzaController::class, 'view'])->name('pizzas.view');


Route::get('/pizzas/{id}', [PizzaController::class, 'show'])->name('pizzas.show');



Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');

Route::post('/cart/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.update');
Route::post('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::get('/payment', [PaymentController::class, 'show'])->name('payment');//->middleware('auth');
Route::post('/order/submit', [OrderController::class, 'submit'])->name('order.submit');
Route::get('/order/success', function () {
    return view('order.success');
})->name('order.success');
Route::get('/order/success', [OrderController::class, 'show'])->name('order.success');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact.view');

Route::get('/sales', [SalesController::class, 'index'])->name('sales.view');

require __DIR__.'/auth.php';

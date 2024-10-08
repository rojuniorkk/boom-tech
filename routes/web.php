<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'website.',
    'prefix' => '/'
], function () {
    Route::get('/', [WebsiteController::class, 'index'])->name('index');
    Route::get('/sobrenos', function () {
        return view('website.aboutus');
    })->name('about');
});


Route::group([
    'as' => 'product.',
    'prefix' => '/p'
], function () {
    Route::get('/{id}/{slug}', [ProductController::class, 'show'])->name('show');
});

Route::middleware('auth')->group(function () {

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Cart
    Route::get('/carrinho', [CartController::class, 'index'])->name('cart.index');
    Route::post('/carrinho-store', [CartController::class, 'store'])->name('cart.store');
    Route::post('/carrinho-edit', [CartController::class, 'edit'])->name('cart.edit');

    Route::get('/pedido', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [CheckoutController::class, 'create'])->name('checkout.create');
});

require __DIR__ . '/auth.php';

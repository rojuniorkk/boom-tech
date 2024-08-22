<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


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
    route::match(['get', 'post'],'/pedido', [CartController::class, 'checkout'])->name('cart.checkout');
});

require __DIR__ . '/auth.php';

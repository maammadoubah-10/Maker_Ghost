<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/client/dashboard', [ClientController::class, 'dashboard'])->name('client.dashboard');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index'); // Correction ici
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/produits/{id}/edit', [ProductController::class, 'edit'])->name('produits.edit');
    Route::delete('/produits/{id}', [ProductController::class, 'destroy'])->name('produits.destroy');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::get('/products/showAll', [ProductController::class, 'showAll'])->name('products.showAll');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'view'])->name('cart.view');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::get('/confirmation', function () {
        return view('confirmation'); // Vous pouvez remplacer 'confirmation' par le nom de votre vue de confirmation
    })->name('confirmation');



});

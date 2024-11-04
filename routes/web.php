<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/products', [WebController::class, 'products'])->name('products');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');
Route::get('/cart', [WebController::class, 'cart'])->name('cart');

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/secret', fn() => 'You are in secret!')->middleware('gate.word:1');



use App\Http\Controllers\HomeController;

use App\Http\Controllers\BlogController;

use App\Http\Controllers\ShopController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/secret', [HomeController::class, 'secret'])->middleware('gate.word:1')->name('secret'); // ?key=bravo


Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');

Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');


Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');

Route::get('/shop/product/{id}', [ShopController::class, 'product'])->name('shop.product');

Route::get('/shop/cart', [ShopController::class, 'cart'])->name('shop.cart');


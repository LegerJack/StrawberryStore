<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

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
    return view('pages.index');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/login', function () {
    return view('pages.sign-in');
});

Route::get('/register', function () {
   return view('pages.sign-up');
});

Route::controller(CategoryController::class)->prefix('catalog')->group(
    function () {
        Route::get('/', 'index');
        Route::get('/{category}', 'show');
        Route::controller(ProductsController::class)->prefix('products')->group(
            function () {
                Route::get('/{product}', 'show');
            }
        );
    }
);

Route::get('/basket', function () {
    return view('pages.basket');
});


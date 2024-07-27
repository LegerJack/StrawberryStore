<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FormHandlerController;
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

Route::get('/', static function () {
    return view('web.static.index');
});

Route::any('/contact', [FormController::class, 'contact'])->name('contact');

Route::get('/login', static function () {
    return view('pages.sign-in');
});

Route::get('/register', static function () {
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

//Route::post('/send/question', [FormController::class, 'handle']);

Route::get('/basket', static function () {
    return view('pages.basket');
});


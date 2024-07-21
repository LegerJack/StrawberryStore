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
    return view('index');
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


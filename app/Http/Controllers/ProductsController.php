<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class ProductsController extends Controller
{
    public function index() {}
    public function create() {}
    public function show(Products $product): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.product', compact('product'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.catalog');
    }

    public function show(Category $category): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $products = $category->products()->paginate(8);
        return view('pages.category', compact('category', 'products'));
    }
}

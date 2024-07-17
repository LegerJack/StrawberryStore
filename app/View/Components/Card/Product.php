<?php

namespace App\View\Components\Card;

use App\Models\Products;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Product extends Component
{
    /**
     * Create a new component instance.
     */
    public Products $product;
    public function __construct(Products $product) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card.product', ['product' => $this->product]);
    }
}

<?php

namespace App\View\Components\Card;

use App\Models\Product as ProductModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Product extends Component
{
    /**
     * Create a new component instance.
     */

    public function __construct(public ProductModel $product) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('web.components.card.product', ['product' => $this->product]);
    }
}

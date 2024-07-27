<?php

namespace App\View\Components\Block;

use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TopProducts extends Component
{
    private $products;
    /**
     * Create a new component instance.
     */
    public function __construct(int $count = 8)
    {
        $this->products = Product::where('active', 1)->take($count)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('web.components.block.top-products', ['products' => $this->products]);
    }
}

<?php

namespace App\View\Components\Block;

use App\Models\Products;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TopProducts extends Component
{
    private $products;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->products = Products::where('active', 1)
            ->take(6)
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.block.top-products', ['products' => $this->products]);
    }
}

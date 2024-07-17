<?php

namespace App\View\Components\Block;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryList extends Component
{
    private $categories;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->categories = Category::where("active", 1)
            ->take(9)
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.block.category-list', ['categories' => $this->categories]);
    }
}

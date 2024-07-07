<?php

namespace App\View\Components;

use App\Models\Products;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Slider extends Component
{
    private $sliderData;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->sliderData = Products::where('active', 1)
            ->take(6)
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.slider', ['slides' => $this->sliderData]);
    }
}

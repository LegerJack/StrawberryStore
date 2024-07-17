<?php

namespace App\View\Components;

use App\Models\Slider as SliderModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

class Slider extends Component
{
    private $sliderData;
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $sliderModel = SliderModel::class,
        public string $sliderType = "auto",
        public int    $slideLimit = 6
    )
    {
        $this->sliderData = $sliderModel::where('active', true)
            ->take($this->slideLimit)
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view("components.slider.{$this->sliderType}", ['slides' => $this->sliderData]);
    }
}

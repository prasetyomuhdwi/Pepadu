<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SwiperSlide extends Component
{
    private array $dinas;

    /**
     * Create a new component instance.
     */
    public function __construct(array $items)
    {
        $this->dinas = $items;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.swiper-slide', ['dinas' => $this->dinas]);
    }
}

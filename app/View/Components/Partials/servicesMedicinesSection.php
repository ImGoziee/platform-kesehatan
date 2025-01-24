<?php

namespace App\View\Components\Partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class servicesMedicinesSection extends Component
{

    public $medicines;
    /**
     * Create a new component instance.
     */
    public function __construct($medicines)
    {
        $this->medicines = $medicines;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partials.services-medicines-section');
    }
}

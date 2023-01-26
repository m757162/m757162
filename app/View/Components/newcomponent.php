<?php

namespace App\View\Components;

use Illuminate\View\Component;

class newcomponent extends Component
{
    public $component;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($alertType2)
    {
        $this->component=$alertType;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.newcomponent');
    }
}

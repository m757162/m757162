<?php

namespace App\View\Components\project;

use Illuminate\View\Component;

class newcompo extends Component
{
    public $newcompo2;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($alertType)
    {
       $this->newcompo2=$alertType;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.project.newcompo');
    }
}

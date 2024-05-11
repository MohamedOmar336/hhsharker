<?php

namespace App\View\Components;

use Illuminate\View\Component;

class btn extends Component
{
    public $type;
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'primary', $name = 'Submit')
    {
        $this->type = $type;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.btn');
    }
}

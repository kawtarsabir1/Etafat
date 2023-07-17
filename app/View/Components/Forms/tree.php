<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class tree extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $nodes;
    public $disabled;
    public function __construct($nodes, $disabled = false)
    {
        $this->nodes = $nodes;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.tree');
    }
}

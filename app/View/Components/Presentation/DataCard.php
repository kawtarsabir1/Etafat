<?php

namespace App\View\Components\Presentation;

use Illuminate\View\Component;

class DataCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     
     */
    public $title;
    public $items;
    
    public function __construct(array $items =[],string $title = null)
    {
        $this->items = $items;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.presentation.data-card');
    }
}

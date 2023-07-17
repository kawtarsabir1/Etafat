<?php

namespace App\View\Components\Presentation;

use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $columns;
    public $items;
    public $route;
    public $lang;

    public function __construct(string $route ="", $items, array $columns = [],$lang = '')
    {
        $this->items = $items;
        $this->route = $route;

        $this->columns = $columns;
        $this->lang = $lang;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.presentation.table');
    }
}

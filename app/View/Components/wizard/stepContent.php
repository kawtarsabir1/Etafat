<?php

namespace App\View\Components\wizard;

use Illuminate\View\Component;

class stepContent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id ;
    public $title ;
    public $type ;

    public function __construct($id, $title, $type = "start")
    {
        $this->id = $id;
        $this->title = $title;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.wizard.step-content');
    }
}

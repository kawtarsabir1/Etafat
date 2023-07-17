<?php

namespace App\View\Components\wizard;

use Illuminate\View\Component;

class step extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id ;
    public $title ;
    public $subtitle ;

    public function __construct($id, $title, $subtitle = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->subtitle = $subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.wizard.step');
    }
}

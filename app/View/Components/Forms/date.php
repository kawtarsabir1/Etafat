<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class date extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $help;
    public $type;
    public $value;
    public $label;
    public $required;
    public $id;

    public function __construct($name, $type = "text", $value = null, $help=null, $label='', $required=false, $id=null)
    {
        $this->name = $name;
        if (!empty($help)) {
            $this->help = $help;
        } else {
            $this->help = $label.'_helper';
        }
        
        $this->type = $type;
        $this->value = $value;

        $this->label=$label;
        $this->required=$required;
        $this->id=$id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.date');
    }
}

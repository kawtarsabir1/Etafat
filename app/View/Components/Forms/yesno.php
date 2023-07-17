<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class yesno extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $help;
    public $label;
    public $value;
    public $required;
    public $id;

    public function __construct($name,$value=null, $help=null, $label="", $required=false, $id=null)
    {
        $this->name = $name;
        
        if (!empty($help)) {
            $this->help = $help;
        } else {
            $this->help = $label.'_helper';
        }

        $this->label = $label;
        $this->value = $value;

        $this->required= $required;
        $this->id=$id;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.yesno');
    }
}

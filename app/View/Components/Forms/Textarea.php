<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $name;
    public $help;
    public $label;
    public $value;
    public $required;

    public function __construct($name,$value ="",  $help=null, $label="", $required=false)
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;

        if (!empty($help)) {
            $this->help = $help;
        } else {
            $this->help = $label.'_helper';
        }

        $this->required= $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.textarea');
    }
}

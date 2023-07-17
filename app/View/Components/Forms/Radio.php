<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Radio extends Component
{
    public $name;
    public $help;
    public $label;
    public $value;
    public $required; 
    public $options;
    public $multiple;
    public $id; 

    public function __construct($name,$options, $value=null, $help=null, $label="", $required=false, $select2=false,  $multiple=false, $id=null, $emptyoption= true)
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
        $this->options= $options;
        $this->multiple = $multiple;
        $this->id=$id; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.radio');
    }
}

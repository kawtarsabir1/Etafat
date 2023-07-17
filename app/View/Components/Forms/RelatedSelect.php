<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class RelatedSelect extends Component
{
    
    public $dom;
    public $table;
    public $field;
    public $condition;
    
    public $name;
    public $help;
    public $label;
    public $value;
    public $required;
    public $select2;
    public $multiple;
    public $id;
    public $emptyoption;
    public function __construct( $dom, $table, $field,$condition ,$name, $value=null, $help=null, $label="", $required=false, $select2=false,  $multiple=false, $id=null, $emptyoption= true)
    {
        $this->name = $name;
        $this->dom = $dom;
        $this->table = $table;
        $this->field = $field;
        $this->condition = $condition;

        $this->help = !empty($help) ? trans($help) : trans($label.'_helper');
        if($this->help == $help || $this->help == $label.'_helper'){
            $this->help = '';
        };

        $this->label = $label; 
        if($value instanceof \Illuminate\Support\Collection ){
            $this->value = $value->toArray();
        }else{
            $this->value = $value;
        }

        $this->required= $required;
        $this->select2= $select2;
        $this->multiple = $multiple;
        $this->id=$id;
        $this->emptyoption = $emptyoption;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.related-select');
    }
}

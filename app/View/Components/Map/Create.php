<?php

namespace App\View\Components\Map;

use Illuminate\View\Component;

class Create extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $type;
    public $multiple;
    public $operation;
    public $wkt;
    public $otherFeatures;
    
    public function __construct($type = 'Polygon',$multiple=false,$operation = 'add',$wkt='',$otherFeatures=[])
    {
        $this->type = $type;
        $this->multiple = $multiple;
        $this->operation = $operation;
        $this->wkt = $wkt;
        $this->otherFeatures = $otherFeatures;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.map.create');
    }
}

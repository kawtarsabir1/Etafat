<?php

namespace App\View\Components\Map;

use Illuminate\View\Component;

class Show extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $wkt;
    public $otherFeatures;
    
    public function __construct($wkt='',$otherFeatures=[])
    {
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
        return view('components.map.show');
    }
}

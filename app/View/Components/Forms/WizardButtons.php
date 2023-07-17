<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class WizardButtons extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $type;

    public function __construct($type="middle")
    {
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.wizard-buttons');
    }
}

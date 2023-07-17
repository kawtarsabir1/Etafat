<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class file extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $id;
    public $description;
    public $maxfiles;

    public function __construct($name, $description = "", $id = null, $maxfiles = 1)
    {
        $this->name = $name;
        if (!empty($id)) {
            $this->id = $id;
        } else {
            $this->id = 'file-' . $name;
        }
        $this->description = $description;
        $this->maxfiles = $maxfiles;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.file');
    }
}

<?php

namespace App\View\Components\Theme;

use Illuminate\View\Component;
use Modules\Processus\Entities\Theme\Relationship;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public string $model;
    public $relations;
    public int $id;

    public function __construct($model, int $id)
    {
        $this->model = $model;
        $this->id = $id;
        $this->relations = Relationship::where("to_model",$this->model)->count() > 0 ? Relationship::where("to_model",$model)->get() : [];
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.theme.sidebar');
    }
}

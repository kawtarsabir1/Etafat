<?php

namespace App\View\Components\Theme;

use App\Services\ThemeService;
use Illuminate\View\Component;
use Modules\Processus\Entities\Theme\Theme;

class Table extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public Theme $theme;
    public $relation;
    public $id; 
    public $rows; 
    public function __construct(Theme $theme, $relation, $id)
    {
        $this->theme = $theme;
        $this->relation = $relation;
        $this->id = $id;
        
        $this->rows = (new ThemeService($theme))->model->all();
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.theme.table');
    }
}

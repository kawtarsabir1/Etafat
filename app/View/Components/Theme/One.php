<?php

namespace App\View\Components\Theme;

use Illuminate\View\Component;
use Modules\Processus\Entities\Theme\Theme;

class One extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    private Theme $theme;
    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.theme.one');
    }
}

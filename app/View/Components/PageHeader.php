<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageHeader extends Component
{
    public $title;
    /**
     * The alert message.
     *
     * @var string
     */
    public $breadcrumbs;

    /**
     * Create a new component instance.
     *
     * @return void
     */

     public function __construct(array $header)
    {
        $this->title = $header["title"];
        $this->breadcrumbs = $header["breadcrumbs"];
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page-header')->with('title',$this->title)->with('breadcrumbs',$this->breadcrumbs);
    }
}

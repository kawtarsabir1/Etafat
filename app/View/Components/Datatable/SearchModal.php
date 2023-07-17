<?php

namespace App\View\Components\Datatable;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class SearchModal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $searchAttributes;
    public $dom;
    public $url;
    public $var;
    public function __construct($service, string $url, string $dom = '')
    {
        $this->searchAttributes = $service->getSearchAttributes();
        $this->dom = $dom;
        $this->url = $url;
        $this->var = !empty($dom) ? Str::replace('-', '_', $dom) : 'table';

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.datatable.search-modal')->with("searchAttributes",$this->searchAttributes);
    }
}

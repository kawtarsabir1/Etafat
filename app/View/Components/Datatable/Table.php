<?php

namespace App\View\Components\Datatable;

use Illuminate\Support\Str;

use Illuminate\View\Component;

class Table extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $tableDefinition;
    public $dom;
    public $url;
    public $var;
    public function __construct($tableDefinition, string $dom = '', $url)
    {
        $this->tableDefinition = $tableDefinition->getTableDefinition();
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
        $columns = [];
        foreach ($this->tableDefinition as $column) {
            unset($column["title"]);
            $column["name"] = $column["data"];
            array_push($columns, $column);
        }
        return view('components.datatable.table')->with("columns",$columns);
    }
}

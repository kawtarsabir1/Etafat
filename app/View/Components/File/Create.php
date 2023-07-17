<?php

namespace App\View\Components\File;

use App\Services\FileService;
use Illuminate\View\Component;

class Create extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    private $module;
    private $fileService;

    public function __construct(string $module)
    {
        $this->module = $module;
        $this->fileService = new FileService();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $filetypes = $this->fileService->getFileTypes($this->module);
        return view('components.file.create')->with("filetypes",$filetypes);
    }
}

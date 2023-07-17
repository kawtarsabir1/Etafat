<?php

namespace App\View\Components\File;

use App\Services\FileService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

class Show extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    private $model;
    private $fileService;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->fileService = new FileService();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $files = $this->fileService->getFiles($this->model);
        return view('components.file.show')->with("files",$files);
    }
}

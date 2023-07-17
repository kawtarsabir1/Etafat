<?php

namespace App\Http\Headers;

use function trans;

class FileTypeHeader
{
    public static function index()
    {
        return  [
            "title"=>trans('models.fileType.title'),
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.setting'),'href'=>null],
                ['title'=>trans('layout.menu.ged'),'href'=>null],
                ['title'=>trans('models.fileType.title_singular'),'href'=>null],
                ['title'=>trans('global.list'),'href'=>null],
            ]
        ];
    }


    public static function show($fileType)
    {
        return  [
            "title"=> $fileType->name,
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.setting'),'href'=>null],
                ['title'=>trans('layout.menu.ged'),'href'=>null],
                ['title'=>trans('models.fileType.title_singular'),'href'=>null],
                ['title'=>trans('global.list'),'href'=>null],
            ]
        ];
    }


    public static function edit($fileType)
    {
        return  [
            "title"=> trans('global.edit')." : ". $fileType->name,
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.setting'),'href'=>null],
                ['title'=>trans('layout.menu.ged'),'href'=>null],
                ['title'=>trans('models.fileType.title_singular'),'href'=>null],
                ['title'=>trans('global.list'),'href'=>null],
            ]
        ];
    }



    public static function create()
    {
        return  [
            "title"=>trans('global.create') .' '. trans('models.fileType.title_singular'),
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.setting'),'href'=>null],
                ['title'=>trans('models.fileType.title_singular'),'href'=>null],
                ['title'=>trans('global.list'),'href'=>null],
            ]
        ];
    }
}

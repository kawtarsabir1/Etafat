<?php

namespace App\Http\Headers;

use App\Models\local;
use function trans;
use function url;

class LocalHeader
{
    public static function index()
    {
        return  [
            "title"=>trans('models.local.title'),
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.local.title_singular'),'url'=>url('admin/locals')],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }


    public static function show(Local $local)
    {
        return  [
            "title"=> $local->id,
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.local.title_singular'),'url'=>url('admin/locals')],
                ['title'=>trans('global.show'),'url'=>null],
            ]
        ];
    }


    public static function edit(Local $local)
    {
        return  [
            "title"=> trans('global.edit')." : ". $local->id,
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.local.title_singular'),'url'=>url('admin/locals')],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }



    public static function create()
    {
        return  [
            "title"=>trans('global.create') .' '. trans('models.local.title_singular'),
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.local.title_singular'),'url'=>url('admin/locals')],
                ['title'=>trans('global.create'),'url'=>null],
            ]
        ];
    }
}

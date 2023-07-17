<?php

namespace App\Http\Headers;

use App\Models\Batiment;
use function trans;
use function url;

class BatimentHeader
{
    public static function index()
    {
        return  [
            "title"=>trans('models.batiment.title'),
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.batiment.title_singular'),'url'=>url('admin/batiments')],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }


    public static function show(Batiment $batiment)
    {
        return  [
            "title"=> $batiment->id,
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.batiment.title_singular'),'url'=>url('admin/batiments')],
                ['title'=>trans('global.show'),'url'=>null],
            ]
        ];
    }


    public static function edit(Batiment $batiment)
    {
        return  [
            "title"=> trans('global.edit')." : ". $batiment->id,
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.batiment.title_singular'),'url'=>url('admin/batiments')],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }



    public static function create()
    {
        return  [
            "title"=>trans('global.create') .' '. trans('models.batiment.title_singular'),
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.batiment.title_singular'),'url'=>url('admin/batiments')],
                ['title'=>trans('global.create'),'url'=>null],
            ]
        ];
    }
}

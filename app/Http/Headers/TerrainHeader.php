<?php

namespace App\Http\Headers;

use function trans;

class TerrainHeader
{
    public static function index()
    {
        return  [
            "title"=>trans('models.terrain.title'),
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.terrain.title_singular'),'url'=>route("admin.terrains.index")],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }


    public static function show($terrain)
    {
        return  [
            "title"=> $terrain->nom,
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.terrain.title_singular'),'url'=>route("admin.terrains.index")],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }


    public static function edit($terrain)
    {
        return  [
            "title"=> trans('global.edit')." : ". $terrain->nom,
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.terrain.title_singular'),'url'=>route("admin.terrains.index")],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }



    public static function create()
    {
        return  [
            "title"=>trans('global.create') .' '. trans('models.terrain.title_singular'),
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.terrain.title_singular'),'url'=>route("admin.terrains.index")],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }
}

<?php

namespace App\Http\Headers;

use App\Models\Etage;
use function trans;
use function url;

class EtageHeader
{
    public static function index()
    {
        return  [
            "title"=>trans('models.etage.title'),
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.etage.title_singular'),'url'=>url('admin/etages')],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }


    public static function show(Etage $etage)
    {
        return  [
            "title"=> $etage->id,
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.etage.title_singular'),'url'=>url('admin/etages')],
                ['title'=>trans('global.show'),'url'=>null],
            ]
        ];
    }


    public static function edit(Etage $etage)
    {
        return  [
            "title"=> trans('global.edit')." : ". $etage->id,
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.etage.title_singular'),'url'=>url('admin/etages')],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }



    public static function create()
    {
        return  [
            "title"=>trans('global.create') .' '. trans('models.etage.title_singular'),
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.etage.title_singular'),'url'=>url('admin/etages')],
                ['title'=>trans('global.create'),'url'=>null],
            ]
        ];
    }
}

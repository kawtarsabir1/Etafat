<?php

namespace App\Http\Headers;

use App\Models\Site;
use function trans;
use function url;

class SiteHeader
{
    public static function index()
    {
        return  [
            "title"=>trans('models.site.title'),
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.site.title_singular'),'url'=>url('admin/sites')],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }


    public static function show(Site $site)
    {
        return  [
            "title"=> $site->denomination,
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.site.title_singular'),'url'=>url('admin/sites')],
                ['title'=>trans('global.show'),'url'=>null],
            ]
        ];
    }


    public static function edit(Site $site)
    {
        return  [
            "title"=> trans('global.edit')." : ". $site->denomination,
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.site.title_singular'),'url'=>url('admin/sites')],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }



    public static function create()
    {
        return  [
            "title"=>trans('global.create') .' '. trans('models.site.title_singular'),
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.patrimoine'),'url'=>null],
                ['title'=>trans('models.site.title_singular'),'url'=>url('admin/sites')],
                ['title'=>trans('global.create'),'url'=>null],
            ]
        ];
    }
}

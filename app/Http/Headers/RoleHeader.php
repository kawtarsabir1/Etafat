<?php

namespace App\Http\Headers;

use function trans;

class RoleHeader
{
    public static function index()
    {
        return  [
            "title"=>trans('models.role.title'),
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.setting'),'url'=>null],
                ['title'=>trans('models.role.title_singular'),'url'=>route("admin.roles.index")],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }


    public static function show($role)
    {
        return  [
            "title"=> $role->title,
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.setting'),'url'=>null],
                ['title'=>trans('models.role.title_singular'),'url'=>route("admin.roles.index")],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }


    public static function edit($role)
    {
        return  [
            "title"=> trans('global.edit')." : ". $role->title,
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.setting'),'url'=>null],
                ['title'=>trans('models.role.title_singular'),'url'=>route("admin.roles.index")],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }



    public static function create()
    {
        return  [
            "title"=>trans('global.create') .' '. trans('models.role.title_singular'),
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.setting'),'url'=>null],
                ['title'=>trans('models.role.title_singular'),'url'=>route("admin.roles.index")],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }
}

<?php

namespace App\Http\Headers;

use function trans;

class UserHeader
{
    public static function index()
    {
        return  [
            "title"=>trans('models.user.title'),
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.setting'),'url'=>null],
                ['title'=>trans('models.user.title_singular'),'url'=>route("admin.users.index")],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }


    public static function show($user)
    {
        return  [
            "title"=> $user->name,
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.setting'),'url'=>null],
                ['title'=>trans('models.user.title_singular'),'url'=>route("admin.users.index")],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }


    public static function edit($user)
    {
        return  [
            "title"=> trans('global.edit')." : ". $user->name,
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.setting'),'url'=>null],
                ['title'=>trans('models.user.title_singular'),'url'=>route("admin.users.index")],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }



    public static function create()
    {
        return  [
            "title"=>trans('global.create') .' '. trans('models.user.title_singular'),
            "breadcrumbs"=>[
                ['title'=>trans('layout.menu.setting'),'url'=>null],
                ['title'=>trans('models.user.title_singular'),'url'=>route("admin.users.index")],
                ['title'=>trans('global.list'),'url'=>null],
            ]
        ];
    }
}

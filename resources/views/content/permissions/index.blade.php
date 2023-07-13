@extends('layouts.app')

@section('title', trans_choice('setting.permission', 10) )

@section('content')
<div class="content ">
    <div class=" container-fluid   container-fixed-lg bg-white">
    <div class="card card-transparent">
        <div class="card-header ">
            <div class="card-title"> {{ trans_choice('setting.permission', 10) }}
            </div>
            <div class="pull-right">
                <div class="col-xs-12">
                    <a href="{{ URL::to('permissions/create') }}" class="btn btn-primary btn-cons"><i class="fa fa-plus"></i> {{ __('setting.addpermission') }}</a>
                </div>
            </div>
            <div class="clearfix"></div>
            </div>
            <div class="card-body">
                <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                    <thead>
                        <tr>
                            <th>{{ trans_choice('setting.permission', 1) }} </th>
                            <th>{{ trans_choice('setting.description', 1) }} </td> 
                            <th>{{ trans_choice('setting.operation', 10) }} </th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ $permission->name }}</td>
                            <td></td> 
                            <td>
                            <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}"  class="btn btn-default btn-rounded  btn-warning  m-r-20 m-b-10"><i class="fa fa-pencil"></i></a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                            <button type='submit' class="btn btn-default btn-rounded m-b-10 btn-danger"><i class="fa fa-trash"></i><button>
                            {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
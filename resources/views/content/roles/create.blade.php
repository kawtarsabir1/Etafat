@extends('layouts.app')

@section("style")
<link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css"
    type="text/css">
<link href="{{asset('assets/wizard.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/themes/default/style.min.css" />

@endsection

@section("breadcrumbs")
<li>{{__("users.parametres")}} </li>
<li><a href="{{ url('users/') }}"> {{__("users.newrole")}} </a></li>
<li>{{__("users.p_user")}}</li>
@endsection
 


@section("submenu")
<a href="{{ url('users')}}" class="btn text-muted  mr-3">{{__("users.user")}}</a>
<a href="{{ url('roles')}}" class="btn btn-primary mr-3">{{__("users.role_permission")}}</a>
@endsection

@section("page-title")
{{__("users.role_permission")}}
@endsection

@section('content')
@if($errors->any())

<div class="alert alert-danger mb-2" role="alert">
    <ul>

        <strong>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}

            </li>
            @endforeach

        </strong>
    </ul>

</div>
@endif


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title mb-3">{{__("users.role_permission")}}  </div>
                            <form action="{{ url('roles') }}" method="POST" enctype="multipart/form-data" id="form">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="col-md-12 form-group mb-3">
                                            <label for="Nom">{{__("users.nom")}}</label>
                                            <input class="form-control form-control" name=name id="name" placeholder="Nom">
                                        </div>
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="description">{{__("users.description")}}</label>
                                            <textarea class="form-control form-control" name=description id="description" placeholder="description">

                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <h4>{{__("users.permission")}}</h4>
                                     <div id="html1">
                                        <ul>
                                            @foreach ($category as $c)
                                            <li data-jstree='{"opened":true}'>{{$c->nom}}
                                            <ul>
                                                @foreach ($c->permissions as $p)
                                                <li data-jstree='{"icon":"fa fa-terminal"}' id='{{$p->id}}' >{{$p->name}}</li>
                                                @endforeach
                                            </ul>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div> 
                                </div>

                                         

                                    <div class="col-md-12">
                                        <button type=submit class="btn btn-primary" style="float:right">{{__("users.valider")}}</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>

    
@endsection



@section("script")
<script src="https://cdnjs.cloudflare.com/ajax/libs/jstree/3.2.1/jstree.min.js"></script>
<script>

$(function () { $('#html1').jstree({
    "plugins" : [ "checkbox" ]}

); });




$("form").bind('submit', function (e) {

        $.post("{{ url('roles') }}",{ name:$("#name").val(),description:$("#description").val(),permissions:$("#html1").jstree("get_selected") },function(data){
            location.reload();
        }).fails(function(data){
            console.log(data);
        }) 
        e.preventDefault();
        return false;
    
});

</script>


@endsection


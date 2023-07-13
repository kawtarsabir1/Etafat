
@extends('layouts.app')

@section("breadcrumbs")
<li>{{__("users.parametres")}} </li>
<li><a href="{{ url('users/') }}"> {{__("users.role_permission")}} </a></li>
<li>{{__("users.p_user")}}</li>
@endsection
 

@section("submenu")
<a href="{{ url('users')}}" class="btn text-muted  mr-3">{{__("users.user")}}</a>
<a href="{{ url('roles')}}" class="btn btn-primary mr-3">{{__("users.role_permission")}}</a>
@endsection

@section("page-title")
{{__("users.role_permission")}}
@endsection

@section('style')
<style>
.fa-exclamation {
  color: red;
}
.roles-list-wrapper .actions-dropodown {
    box-shadow:0 2px 8px 0 rgba(0,0,0,.14);border-radius:.5rem;
}
.dataTables_filter input { height: 35px }

.dropdown .dropdown-menu::before {
    content: '';
    position: absolute;
    top: -1px;
    left: 139px;
    width: .75rem;
    height: .75rem;
    display: block;
    background: #FFF;
}
</style>
<link rel="stylesheet" href="{{ asset('assets/css/plugins/datatables.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css/plugins/sweetalert2.min.css') }}" />

@endsection

@section('content')
<div class="card">
        <div class="card-content">
            <div class="card-body">
           
            <div class="row">
                <div class="col-12">
                    <div class="ag-grid-btns d-flex justify-content-between flex-wrap mb-1">
                        <div class="dropdown sort-dropdown mb-1 mb-sm-0">
                            <div id="table-buttons"></div>
                        </div>
                        <div class="ag-btns d-flex flex-wrap">
                            <div id="newSearchPlace" style="margin-right: 10px;">
                            </div>                         
                            <div class="action-btns">
                                <div class="btn-dropdown ">
                                    <div class="btn-group dropdown actions-dropodown">
                                        <a type="button" href="{{ url('roles/create') }}"
                                        class="btn btn-outline-primary">
                                           <i class="fa fa-plus"></i>
                                        </a>
                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <table class="table table-striped" id='mydatatable'>
                <thead>
                 <tr>
                       <th>{{__("users.nom")}}</th>
                       <th>{{__("users.permission")}}</th>
                       <th>{{__("users.action")}}</th>
                 </tr>
                                        </thead>
                                        <tbody style="" class="kt-datatable__body">
                                            @foreach ($roles as $role)
                                            <tr>
                                                <td>{{$role->name}}</td>
                                                <td class="kt-user-card-v2__name" href="#">
                                                    @foreach($role->permissions->pluck('name')->toArray() as $r)
                                                    <div style="vertical-align: inherit;font-size:.9rem;"> {{$r}} </div>
                                                    @endforeach
                                                </td>
                                                <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                @can("couche:edition") 
                                                    <a  href="{{ route('roles.edit', $role->id) }}" data-toggle="tooltip" data-placement="top" title="Modifier" class="btn btn-outline-warning btn-sm mr-1">
                                                        <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                                    </a>
                                                @endcan
                                                @can("couche:suppression")
                                                <form action="{{route('roles.destroy', $role->id)}}" method="POST">
                                                @csrf
                                                @method("DELETE")

                                                <button type="submit" data-toggle="tooltip" data-placement="top" title="Supprimer" class="btn btn-outline-danger btn-sm mr-1">
                                                    <i class="nav-icon i-Close-Window font-weight-bold"></i>
                
                
                                                </button>
                                                </form>
                                                @endcan
                                                </div>




                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                </table>
        </div>
    </div>
    </div>    



@endsection
@section('script')
<script src="{{ asset('assets/js/plugins/sweetalert2.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2"></script>
<script src="{{ asset('assets/js/plugins/datatables.min.js') }}"></script>

<script>


    var datatable = $('#mydatatable').DataTable({
        layout: {
            scroll: true,
            footer: false,
        },
        rows:{
            autoHide: false,
        },
        sortable: true,
        orderCellsTop: true,
		fixedHeader: true,
		"scrollX": true,
        "bPaginate": true,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": false,
        language: { search: "",
            searchPlaceholder: '{{__("users.search")}}...',
            paginate: {
                "next": '{{__("users.next")}}',
                "previous": '{{__("users.previous")}}'
            },
        
        
        },

            
		"initComplete": function(settings, json) {
       		$('.dataTables_scrollBody thead tr').css({visibility:'collapse'});
    	}
    });



  function archiverAlert(id){
	Swal.fire({
		title: '{{__("users.sur")}}',
		type: 'warning',
		showCancelButton: true,
		confirmButtonText: '{{__("users.archivele")}}!',
		cancelButtonText: '{{__("users.nonannuler")}} ',
		reverseButtons: true
		}).then(function(result){
            // console.log(result);
		if (result.value) {
			$.ajax({
				url: "{{url('/tnb/tnb/')}}/"+id,
				type: 'DELETE',

				data: {
					"id": id,
					"_token": "{{ csrf_token() }}",
                    "_method" : "DELETE"
				},
				success: function (response){
					console.log(response);
					if (result) {
						swal.fire(
							'Archivé!',
                            'Votre TNB a été archivé',
                            'success'
						)
					}
					// error de suppression
                    location.reload();
				}
			});
		}
		});
}

$(document).on("click", "#btnArchiverTNB",function(){
	let id  = $(this).attr("data-id");
	archiverAlert(id);
})

function supprimerAlert(id){
	Swal.fire({
		title: '{{__("users.sur")}}?',
		text: '{{__("users.pasdereour")}}?',
		type: 'warning',
		showCancelButton: true,
		confirmButtonText: '{{__("users.supprimele")}}',
		cancelButtonText: '{{__("users.nonannuler")}}',
		reverseButtons: true
		}).then(function(result){
		if (result.value) {
			$.ajax({
				url: "{{url('/tnb/tnb/supprimer/')}}/"+id,
				type: 'DELETE',

				data: {
					"id": id,
					"_token": "{{ csrf_token() }}",
                    "_method" : "DELETE"
				},
				success: function (response){
					console.log(result);
					if (result) {
						swal.fire(
							'{{__("users.supprime")}}',
                             '{{__("users.rolesupprime")}}',
                            'success'
						)
					}
					// error de suppression
                    location.reload();
				}
			});
		}
		});
}

$(document).on("click", "#btnSupprimerTNB",function(){
	let id  = $(this).attr("data-id");
	supprimerAlert(id);
})


</script>


@endsection

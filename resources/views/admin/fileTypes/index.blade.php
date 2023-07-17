@extends('layouts/contentLayoutMaster')

@section('vendor-style')
    {{-- vendor css files --}}
    <link rel="stylesheet" href="{{asset('vuexy/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('vuexy/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('vuexy/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}" />
    <link rel="stylesheet" href="{{asset('vuexy/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}" />
    <link rel="stylesheet" href="{{asset('vuexy/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css')}}" />
@endsection


@section('content')

    <x-PageHeader :header="\App\Http\Headers\FileTypeHeader::index()"></x-PageHeader>


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            @can('user_create')
                                <a class="btn btn-success float-start" href="{{ route('admin.file-types.create') }}">
                                    {{ trans('global.add') }} {{ trans('models.fileType.title_singular') }}
                                </a>
                            @endcan
                        </div>
                        <div class="col-md-6">
                            <x-datatable.ExportButtons/>

                            <div class="form-group float-end">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Recherche" aria-label="search"  aria-describedby="basic-addon1" id="table-search">

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="table-responsive">
                        <x-datatable.Table
                                :tableDefinition="new \App\Http\DataTables\FileTypesDataTable()"
                                :dom="'filetype-datatable'"
                                :url="url('admin/file-types')"

                        ></x-datatable.Table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('vendor-script')
    {{-- vendor files --}}
<script src="{{asset('vuexy/vendor/libs/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('vuexy/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('vuexy/vendor/libs/datatables-responsive/datatables.responsive.js')}}"></script>
<script src="{{asset('vuexy/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js')}}"></script>
<script src="{{asset('vuexy/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js')}}"></script>
<script src="{{asset('vuexy/vendor/libs/datatables-buttons/datatables-buttons.js')}}"></script>
<script src="{{asset('vuexy/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js')}}"></script>
<script src="{{asset('vuexy/vendor/libs/jszip/jszip.js')}}"></script>
<script src="{{asset('vuexy/vendor/libs/pdfmake/pdfmake.js')}}"></script>
<script src="{{asset('vuexy/vendor/libs/datatables-buttons/buttons.html5.js')}}"></script>
<script src="{{asset('vuexy/vendor/libs/datatables-buttons/buttons.print.js')}}"></script>
<script src="{{asset('vuexy/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.js')}}"></script>
<script src="{{asset('vuexy/vendor/libs/datatables-rowgroup/datatables.rowgroup.js')}}"></script>
@endsection

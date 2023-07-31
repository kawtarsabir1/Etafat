@extends('layouts/layoutMaster')

@section('title', 'Créer un rôle')

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('assets/vendors/css/forms/wizard/bs-stepper.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('assets/vendors/css/forms/select/select2.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('assets/vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/jstree/jstree.css')}}" />
@endsection

@section('style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset(mix('assets/css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('assets/css/base/plugins/forms/form-wizard.css')) }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.css"
        integrity="sha512-+VDbDxc9zesADd49pfvz7CgsOl2xREI/7gnzcdyA9XjuTxLXrdpuz21VVIqc5HPfZji2CypSbxx1lgD7BgBK5g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('page-script')
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
<script src="{{asset('assets/js/extended-ui-treeview.js')}}"></script>
<script>
        $(".btn-create").click(function(e) {
            console.log("clicked");
            e.preventDefault();
            var formData = new FormData($('#wizard-form')[0]);
            var permissions = [];
            $('#jstree-checkbox').jstree().get_checked(true).forEach(function (node) {
                permissions.push(node.id);
            });
            formData.append('permissions', permissions);
            $.ajax({
                type: 'POST',
                url: "{{ route('admin.roles.store') }}",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    console.log(data);
                    window.location.href = "{{ route('admin.roles.index') }}";
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });

    </script>
@endsection

@section('content')
    <x-PageHeader :header="\App\Http\Headers\UserHeader::create()"></x-PageHeader>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <form enctype="multipart/form-data"
                        id="wizard-form">
                        @csrf
                        <h5>Informations</h5>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="title">Titre du rôle :</label>
                                <input class="form-control" type="text" id="title" name="title" placeholder="Entrer le titre du rôle " />
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="description">Description du rôle :</label>
                                <textarea class="form-control" type="text" id="description" name="description" placeholder="Entrer la description du rôle" rows="3"></textarea>
                            </div>
                        </div>
                        <hr>
                        <h5>Autorisations :</h5>
                        <div class="row">
                            <!-- Checkbox -->
                            <div class="col-md-6 col-12">
                                <div class="card mb-md-0 mb-4">
                                <div class="card-body">
                                    <div id="jstree-checkbox"></div>
                                </div>
                                </div>
                            </div>
                            <!-- /Checkbox -->
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-outline-secondary">
                                <i class="bx bx-chevron-left"></i>Annuler
                            </button>
                            <button type="button" class="btn btn-primary btn-create">Créer
                                <i class="bx bx-chevron-right"></i>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('vendor-script')
    <!-- vendor files -->
    <script src="{{ asset(mix('assets/vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>
    <script src="{{ asset(mix('assets/vendors/js/forms/select/select2.full.min.js')) }}"></script>
    <script src="{{ asset(mix('assets/vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>

    <script src="{{ asset(mix('assets/vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/ar.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/BossBele/cropzee@latest/dist/cropzee.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.js"
        integrity="sha512-ZK6m9vADamSl5fxBPtXw6ho6A4TuX89HUbcfvxa2v2NYNT/7l8yFGJ3JlXyMN4hlNbz0il4k6DvqbIW5CCwqkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="{{asset('assets/vendor/libs/jstree/jstree.js')}}"></script>
@endsection
@section('script')
    <!-- Page js files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="{{ asset('js/dropzone.js') }}"></script>
@endsection



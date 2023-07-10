@extends('layouts/layoutMaster')

@section('title', 'Create')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />


<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/pickr/pickr-themes.css')}}" />

<link rel="stylesheet" href="{{asset('assets/vendor/libs/spinkit/spinkit.css')}}" />

<!--  -->

<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/rateyo/rateyo.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />

@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/autosize/autosize.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>

<script src="{{asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.js')}}"></script>
<script src="{{asset('assets/vendor/libs/pickr/pickr.js')}}"></script>

<script src="{{asset('assets/vendor/libs/block-ui/block-ui.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sortablejs/sortable.js')}}"></script>

<!--  -->

<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>
<script src="{{asset('assets/vendor/libs/rateyo/rateyo.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/forms-extras.js')}}"></script>
<script src="{{asset('assets/js/form-validation.js')}}"></script>
<script src="{{asset('assets/js/forms-pickers.js')}}"></script>
<script src="{{asset('assets/js/wizard-ex-checkout.js')}}"></script>

<script type="text/javascript">
    function checkForm(data) {
        console.log(data.length)
        // Loop through each input field in the form
        for (var i = 0; i < data.length; i++) {
            var element = data[i];
            // Check if the input field is required and empty
            if (element.required && element.value === "") {
                return false;
            }
        }
        return true;
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit").click(function(e) {
        e.preventDefault();
        var formData = new FormData($('#create-form')[0]);
            
        for (var pair of formData.entries()) {
            console.log(pair[0] + ', ' + pair[1]);
        }
        $.ajax({
            url: "{{ route('departements-Add') }}",
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                if ($.isEmptyObject(data.error)) {
                    alert('Departement ajouté avec succés.');
                    location.reload();
                } else {
                    printErrorMsg(data.error);
                }
            }
        });
        
    });

    function deletedepartement(id) {
        if (confirm("Voulez-vous vraiment supprimer ce Departement ?")) {
            $.ajax({
                url: "/cv/deleteDepart/" + id,
                type: 'DELETE',
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        alert('Departement supprimé avec succés.');
                        location.reload();
                    } else {
                        printErrorMsg(data.error);
                    }
                }
            });
        }
    }

    function editDepartement(id) {
        var value = $('#text-'+id).text();
        input = $('#form-input'),
        inputId = $('#input-id'),
        btnUpdate = $('.btn-update');
        btnCancel = $('.btn-cancel');
        btnSubmit = $('.btn-submit');
        btnUpdate.removeClass('d-none');
        btnCancel.removeClass('d-none');
        btnSubmit.addClass('d-none');
        input.val(value);   
        inputId.val(id);
    }

    $(function () {

        $('.btn-update').click(function (e) {
            e.preventDefault();
            var formData = new FormData($('#create-form')[0]);
            var id = $('#input-id').val();
            for (var pair of formData.entries()) {
                console.log(pair[0] + ', ' + pair[1]);
            }
            $.ajax({
                url: baseUrl + 'cv/updateDepartement/' + id,
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        alert('Departement modifié avec succés.');
                        location.reload();
                    } else {
                        printErrorMsg(data.error);
                    }
                }
            });
        });
        $('.btn-cancel').click(function (e) {
            e.preventDefault();
            var input = $('#form-input'),
            btnUpdate = $('.btn-update');
            btnCancel = $('.btn-cancel');
            btnSubmit = $('.btn-submit');
            btnUpdate.addClass('d-none');
            btnCancel.addClass('d-none');
            btnSubmit.removeClass('d-none');
            input.val('');   
        });
    });

</script>
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/wizard-ex-checkout.css')}}" />
@endsection


@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">CVtéque /</span> Gestion Des Departements
</h4>

<div class="row">
    <div id="wizard-checkout" class="bs-stepper wizard-icons wizard-icons-example mt-2">
        <div class="bs-stepper-content">
            <form id="create-form" class="formInfos">
                <div>
                    <h5>Ajouter Un Departement</h5>
                    <div class="col-12 row mb-4">
                        <div class="col-md-6">
                            <label class="form-label" for="Nom">Nom de Departement</label>
                            <input type="text" id="form-input" class="form-control" placeholder="" name="nom" />
                            <input type="hidden" id="input-id" class="form-control" placeholder="" name="id" />
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-success btn-submit mt-4">Ajouter</button>
                            <button type="button" class="btn btn-success btn-update mt-4 d-none">Modifier</button>
                            <button type="button" class="btn btn-secondary btn-cancel mt-4 d-none">Annuler</button>
                        </div>
                    </div>
                    <h5>Liste des Departements</h5>
                    <div>
                        <ul class="list-group mb-4">
                            @foreach($departements as $departement)
                            <li class="list-group-item">
                                <p id="text-{{$departement->id}}">{{ $departement->departementNom }}</p> 
                                <button type="button" onclick="deletedepartement({{$departement->id}})" class="btn btn-danger btn-sm float-end">Supprimer</button>
                                <button type="button" onclick="editDepartement({{$departement->id}})" class="btn btn-primary btn-sm float-end me-2">Modifier</button>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>






@endsection
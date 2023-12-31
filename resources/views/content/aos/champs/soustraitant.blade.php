@extends('layouts/layoutMaster')

@section('title', 'Sous-Traitant')

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
            url: "{{ route('soustraitant-add') }}",
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                if ($.isEmptyObject(data.error)) {
                    alert('Soustraitant ajouté avec succés.');
                    location.reload();
                } else {
                    printErrorMsg(data.error);
                }
            }
        });
        
    });

    function deleteSoustraitant(id) {
        if (confirm("Voulez-vous vraiment supprimer ce Soustraitant ?")) {
            $.ajax({
                url: baseUrl + 'ao/champ/soustraitant/' + id,
                type: 'DELETE',
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        alert('Soustraitant supprimé avec succés.');
                        location.reload();
                    } else {
                        printErrorMsg(data.error);
                    }
                }
            });
        }
    }

    function editSoustraitant(id) {
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
            $.ajax({
                url: baseUrl + 'ao/champ/updateSoustraitant/' + id,
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        alert('Soustraitant modifié avec succés.');
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



    function printErrorMsg(msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display', 'block');
        $.each(msg, function(key, value) {
            $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
        });
    }
</script>
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/wizard-ex-checkout.css')}}" />
@endsection


@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">CVtéque /</span> Gestion Des Soustraitants
</h4>

<div class="row">
    <div id="wizard-checkout" class="bs-stepper wizard-icons wizard-icons-example mt-2">
        <div class="bs-stepper-content">
            <form id="create-form" class="formInfos">
                <div>
                    <h5>Ajouter un Soustraitant</h5>
                    <div class="col-12 row mb-4">
                        <div class="col-md-6">
                            <label class="form-label" for="Nom">Nom du Soustraitant</label>
                            <input type="text" id="form-input" class="form-control" name="soustraitant" />
                            <input type="hidden" class="form-control" id="input-id"/>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-submit btn-primary mt-4">Ajouter</button>
                            <button type="button" class="btn btn-update btn-success mt-4 d-none">Editer</button>
                            <button type="button" class="btn btn-cancel btn-secondary mt-4 d-none">Annuler</button>
                        </div>
                    </div>
                    <h5>Liste des Soustraitants</h5>
                    <div>
                        <ul class="list-group mb-4">
                            @php
                                $sortedSoustraitants = $soustraitants->sortBy('id');
                            @endphp
                            @foreach($sortedSoustraitants as $soustraitant)
                            <li class="list-group-item">
                                <p id="text-{{$soustraitant->id}}">{{ $soustraitant->soustraitant }}</p>
                                <button type="button" onclick="deleteSoustraitant({{$soustraitant->id}})" class="btn btn-danger btn-sm float-end">Supprimer</button>
                                <button type="button" onclick="editSoustraitant({{$soustraitant->id}})" class="btn btn-primary mx-3 btn-sm float-end">Editer</button>
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
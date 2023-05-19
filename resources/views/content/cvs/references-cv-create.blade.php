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
<!-- <script src="{{asset('assets/js/cards-actions.js')}}"></script> -->
<script src="{{asset('assets/js/wizard-ex-checkout.js')}}"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-create-ref").click(function(e) {
        e.preventDefault();
        var formData = new FormData($('#wizard-checkout-form')[0]);

        for(var pair of formData.entries()) {
            console.log(pair[0]+ ', '+ pair[1]); 
        }
        let toFill = [];
        for (const [key, value] of formData.entries()) {
            if (key != 'Adresse_2') {
                if (!value) {
                    toFill.push(key);
                }
            }
        }
        if (toFill.length > 0) {
            alert('Please fill the fields : ' + toFill.join(', '));
            return false;
        } else {
            $.ajax({
                url: "{{ route('reference-store') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        alert('Reference added');
                        window.location.href = "/cv/references";
                    } else {
                        printErrorMsg(data.error);
                    }
                }
            });
        }
    });

</script>
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/wizard-ex-checkout.css')}}" />
@endsection


@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">CVtéque /</span> Créer un nouveau reference
</h4>

<div class="row">
    <div id="wizard-checkout" class="bs-stepper wizard-icons wizard-icons-example mt-2">
        <div class="bs-stepper-content border-top">
            <form id="wizard-checkout-form">
                <div class="col-12">
                    <div class="col-12">
                        <h6 class="mt-2 fw-semibold">1. References</h6>
                        <hr class="mt-0" />
                    </div>
                    <div class="content-wrapper-refs">
                        <div class="content-refs">
                            <div class="row">
                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-employeur">Employeur</label>
                                    <input type="text" name="employeur" class="form-control" placeholder="Etafat">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-range">Range</label>
                                    <input type="text" id="ref-new-range" class="form-control" placeholder="YYYY-MM-DD Au YYYY-MM-DD" name="range" />
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-poste">Poste</label>
                                    <input type="text" name="poste" class="form-control" placeholder="Directeur Etudes">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="form-repeater-1-4">Employee</label>
                                    <select id="form-repeater-1-4" class="form-select" name="employee">
                                        <option value="">Select Employee</option>
                                        @foreach($informations as $info)
                                        <option value="{{$info->ID_Salarie}}">{{$info->Nom}} {{$info->Prenom}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label for="formValidationFile" class="form-label">Attestation reference (s'il y a)</label>
                                    <input class="form-control" type="file" name="attestation">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label for="ref-taches" class="form-label">Tache(s) (splite with comma)</label>
                                    <textarea class="form-control" name="taches" rows="3" placeholder="Tache 1, Tache 2, Tache 3"></textarea>
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label for="ref-taches" class="form-label">Domaine(s) (splite with comma)</label>
                                    <textarea class="form-control" name="domaines" rows="3" placeholder="Domaine 1, Domaine 2, Domaine 3"></textarea>
                                </div>

                                <div class="col-12 d-flex justify-content-between">
                                    <button type="button" class="btn btn-label-secondary btn-prev">
                                        <span class="align-middle d-sm-inline-block d-none">Cancel</span>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-create-ref"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Create Reference</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>

<!-- </div> -->






@endsection
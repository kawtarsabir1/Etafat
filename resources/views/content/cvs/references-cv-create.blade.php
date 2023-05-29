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
            if (key != 'attestation') {
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
                        alert('Référence ajoutée avec succès');
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
    <span class="text-muted fw-light">CVthèque /</span> Créer un nouveau reference
</h4>

<div class="row">
    <div id="wizard-checkout" class="bs-stepper wizard-icons wizard-icons-example mt-2">
        <div class="bs-stepper-content">
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
                                    <label class="form-label" for="ref-client">Nom du societe</label>
                                    <input type="text" name="societe" class="form-control" placeholder="Etafat">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-client">N° du Reference</label>
                                    <input type="text" name="nRef" class="form-control" placeholder="##">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-client">Client</label>
                                    <input type="text" name="client" class="form-control" placeholder="MASEN">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-client">N° Marché</label>
                                    <input type="text" name="nMarche" class="form-control" placeholder="26/2020/Exemple">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-annee">Année</label>
                                    <input type="text" name="annee" class="form-control" placeholder="2023">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-client">Montant</label>
                                    <input type="text" name="mantant" class="form-control" placeholder="1000000 DH">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label for="formValidationFile" class="form-label">Attestation (s'il y a)</label>
                                    <input class="form-control" type="file" name="attestation">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label for="formValidationFile" class="form-label">Fiche de projet</label>
                                    <input class="form-control" type="file" name="fiche">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label for="ref-objet" class="form-label">Objet</label>
                                    <textarea class="form-control" name="objet" rows="3" placeholder="Objet de reference"></textarea>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <label for="selectpickerLiveSearch" class="form-label">Missions (séparées par une virgule)</label>
                                    <textarea class="form-control" name="missions" rows="3" placeholder="Mission 1, Mission 2, Mission 3"></textarea>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <label for="selectpickerLiveSearch" class="form-label">Description des missions</label>
                                    <textarea class="form-control" name="description" placeholder="Description" rows="3"></textarea>
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="form-repeater-1-4">Catégorie</label>
                                    <select id="form-repeater-1-4" class="form-select" name="category">
                                        <option value="">Sélectionner Catégorie</option>
                                        <option value="Topo">TOPO</option>
                                        <option value="Bathy">BATHY</option>
                                        <option value="3D">3D</option>
                                        <option value="SIG">SIG</option>
                                        <option value="PVA & Lidar">PVA & LIDAR</option>
                                        <option value="PVA & Lidar">DRONE</option>
                                        <option value="PVA & Lidar">LIDAR</option>
                                    </select>
                                </div>

                                <div class="col-12 d-flex justify-content-between">
                                    <button type="button" class="btn btn-label-secondary btn-prev">
                                        <span class="align-middle d-sm-inline-block d-none">Annuler</span>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-create-ref"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Créer une référence</span></button>
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
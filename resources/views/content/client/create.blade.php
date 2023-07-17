@extends('layouts/layoutMaster')

@section('title', 'Create Client')

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
<script src="{{asset('assets/js/forms-selects.js')}}"></script>
<script src="{{asset('assets/js/forms-extras.js')}}"></script>
<script src="{{asset('assets/js/form-validation.js')}}"></script>
<script src="{{asset('assets/js/forms-pickers.js')}}"></script>
<script src="{{asset('assets/js/wizard-ex-checkout.js')}}"></script>
<script src="{{asset('assets/js/multi-select.js')}}"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-create").click(function(e) {
        e.preventDefault();
        var formData = new FormData($('#wizard-checkout-form')[0]);
        for (var pair of formData.entries()) {
            console.log(pair[0] + ', ' + pair[1]);
        }
        // $.ajax({
        //     url: "{{ route('appel-offre-store') }}",
        //     type: 'POST',
        //     data: formData,
        //     contentType: false,
        //     processData: false,
        //     success: function(data) {
        //         if ($.isEmptyObject(data.error)) {
        //             alert('Données de AO enregistrées');
        //             window.location.href = baseUrl + "ao/gestion";
        //         } else {
        //             printErrorMsg(data.error);
        //         }
        //     }
        // });

    });

    function afficherChamps() {
        var type = document.getElementById("type").value;
        var divsMorale = document.getElementsByClassName("champs-morale");

        for (var i = 0; i < divsMorale.length; i++) {
            if (type === "morale") {
                divsMorale[i].style.display = "block";
            } else {
                divsMorale[i].style.display = "none";
            }
        }
    }

    function printErrorMsg(msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display', 'block');
        $.each(msg, function(key, value) {
            $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
        });
    }
</script>

<style>
    .champs-morale {
        display: none;
    }
</style>

@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/wizard-ex-checkout.css')}}" />
@endsection


@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Appels d'offers /</span> Créer un nouveau Client
</h4>

<div class="row">
    <div id="" class="bs-stepper wizard-icons wizard-icons-example mt-2">
        <div class="bs-stepper-content">
            <form id="wizard-checkout-form" class="formInfos">
                <!-- @csrf -->
                <!-- Infos -->
                <div>
                    <div class="col-12 row">

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="type">Type</label>
                            <select class="form-select" id="type" name="type" onchange="afficherChamps()">
                                <option selected>Selectionner le Type</option>
                                <option>Physique</option>
                                <option value="morale">Morale</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="tel">Tel</label>
                            <input class="form-control" type="text" id="tel" name="tel" placeholder="Tel" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="fax">Fax</label>
                            <input class="form-control" type="text" id="fax" name="fax" placeholder="Fax" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="mail">Adresse</label>
                            <input class="form-control" type="text" id="adresse" name="adresse" placeholder="Adresse" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="mail">Email</label>
                            <input class="form-control" type="text" id="mail" name="mail" placeholder="Email" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="site">Site web</label>
                            <input class="form-control" type="text" id="site" name="site" placeholder="Site web" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="ice">ICE</label>
                            <input class="form-control" type="text" id="ice" name="ice" placeholder="ICE" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="rc">RC</label>
                            <input class="form-control" type="text" id="rc" name="rc" placeholder="RC" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="cnss">CNSS</label>
                            <input class="form-control" type="text" id="cnss" name="cnss" placeholder="CNSS" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="if">IF</label>
                            <input class="form-control" type="text" id="if" name="if" placeholder="IF" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="patente">Patente</label>
                            <input class="form-control" type="text" id="patente" name="patente" placeholder="Patente" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="rib">RIB</label>
                            <input class="form-control" type="text" id="rib" name="rib" placeholder="RIB" />
                        </div>

                        <div class="col-md-6 mb-2 champs-morale">
                            <label class="form-label" for="capital">Capital</label>
                            <input class="form-control" type="text" id="capital" name="capital" placeholder="Capital" />
                        </div>

                        <div class="col-md-6 mb-2 champs-morale">
                            <label class="form-label" for="nature">Nature</label>
                            <select class="form-select" id="nature" name="nature">
                                <option selected>Selectionner la nature</option>
                                <option>Privée</option>
                                <option>Semi-Public</option>
                                <option>Public</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-2 champs-morale">
                            <label class="form-label" for="ste">STE</label>
                            <input class="form-control" type="text" id="ste" name="ste" placeholder="STE" />
                        </div>

                        <div>
                            <br>
                            <h5>Contact</h5>
                            <div class="content-wrapper-contact">
                                <div class="content-contact">
                                    <div class="row">

                                        <div class="col-md-4 mb-2">
                                            <label class="form-label" for="">nom</label>
                                            <input class="form-control" type="text" placeholder="Entrer le nom" name="nom" />
                                        </div>

                                        <div class="col-md-4 mb-2">
                                            <label class="form-label" for="">prenom</label>
                                            <input class="form-control" type="text" placeholder="Entrer le prenom" name="prenom" />
                                        </div>

                                        <div class="col-md-4 mb-2">
                                            <label class="form-label" for="">poste</label>
                                            <input class="form-control" type="text" placeholder="Entrer le poste" name="poste" />
                                        </div>

                                        <div class="col-md-4 mb-2">
                                            <label class="form-label" for="">mail</label>
                                            <input class="form-control" type="text" placeholder="Entrer le mail" name="mail" />
                                        </div>

                                        <div class="col-md-4 mb-2">
                                            <label class="form-label" for="">gsm</label>
                                            <input class="form-control" type="text" placeholder="Entrer le gsm" name="gsm" />
                                        </div>

                                        <div class="col-md-4 mb-2">
                                            <label class="form-label" for="">idClient</label>
                                            <input class="form-control" type="text" placeholder="Entrer le idClient" name="idClient" />
                                        </div>

                                        <div class="col-lg-12 col-xl-2 col-12 d-flex align-items-end mb-3">
                                            <button class="btn btn-danger btn-remove"><i class="fa fa-trash"></i> Supprimer</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="actions mb-4">
                                <button type="button" class="btn btn-primary btn-add-contact"><i class="fa fa-plus"></i> Ajouter un Contact</button>
                            </div>
                            <br>
                        </div>

                        <div class="col-12">
                            <div class="col-12">
                                <div class="col-12 d-flex justify-content-between">
                                    <button type="button" class="btn btn-label-secondary btn-prev">
                                        <span class="align-middle d-sm-inline-block d-none" onclick="window.history.back();">Annuler</span>
                                    </button>
                                    <button type="button" class="btn btn-success btn-create"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Ajouter</span></button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>


</div>

@endsection

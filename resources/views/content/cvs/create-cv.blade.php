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
    function checkForm(data) {
        console.log(data.length)
        // Loop through each input field in the form
        for (var i = 0; i < data.length; i++) {
            var element = data[i];
            // Check if the input field is required and empty
            if (element.required && element.value === "") {
                console.log(element)
                return false;
            }
        }
        // If all required fields are filled in, return null
        return true;
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit").click(function(e) {
        e.preventDefault();
        var formData = new FormData($('#wizard-checkout-form')[0]);
        let toFill = [];
        for (const [key, value] of formData.entries()) {
            if(key != 'Adresse_2'){
                if (!value) {
                    toFill.push(key);
                }
            }
        }
        if(toFill.length > 0){
            alert('Please fill the fields : ' + toFill.join(', '));
            return false;
        }else{
            var cursusArray = JSON.parse(localStorage.getItem('cursusArray'));
            formData.append('cursusArray', JSON.stringify(cursusArray));
            //get formationArray from localStorage
            var formationArray = JSON.parse(localStorage.getItem('formationArray'));
            formData.append('formationArray', JSON.stringify(formationArray));
            //send form data to the controller
            $.ajax({
                url: "{{ route('cv-store') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        alert(data.success);
                        window.location.href = "{{ route('cv-gestion') }}";
                    } else {
                        printErrorMsg(data.error);
                    }
                }
            });
        }
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
    <span class="text-muted fw-light">CVtéque /</span> Créer un nouveau CV
</h4>

<div class="row">
    <div id="wizard-checkout" class="bs-stepper wizard-icons wizard-icons-example mt-2">
        <div class="bs-stepper-header m-auto border-0 py-5">
            <div class="step" data-target="#checkout-cart">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-icon">
                        <svg viewBox="0 0 58 54">
                            <use xlink:href="{{asset('assets/svg/icons/form-wizard-personal.svg#wizardPersonal')}}"></use>
                        </svg>
                    </span>
                    <span class="bs-stepper-label">Informations générales</span>
                </button>
            </div>
            <div class="line">
                <i class="ti ti-chevron-right"></i>
            </div>
            <div class="step" data-target="#checkout-address">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-icon">
                        <svg viewBox="0 0 54 54">
                            <use xlink:href="{{asset('assets/svg/icons/wizard-checkout-address.svg#wizardCheckoutAddress')}}"></use>
                        </svg>
                    </span>
                    <span class="bs-stepper-label">Cursus</span>
                </button>
            </div>
            <div class="line">
                <i class="ti ti-chevron-right"></i>
            </div>
            <div class="step" data-target="#checkout-payment">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-icon">
                        <svg viewBox="0 0 58 54">
                            <use xlink:href="{{asset('assets/svg/icons/form-wizard-social-link.svg#wizardSocialLink')}}"></use>
                        </svg>
                    </span>
                    <span class="bs-stepper-label">Formation</span>
                </button>
            </div>
            <div class="line">
                <i class="ti ti-chevron-right"></i>
            </div>
            <div class="step" data-target="#checkout-confirmation">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-icon">
                        <svg viewBox="0 0 58 54">
                            <use xlink:href="{{asset('assets/svg/icons/wizard-checkout-confirmation.svg#wizardConfirm')}}"></use>
                        </svg>
                    </span>
                    <span class="bs-stepper-label">Confirmation</span>
                </button>
            </div>
        </div>
        <div class="bs-stepper-content border-top">
            <form id="wizard-checkout-form" class="formInfos">
                <!-- @csrf -->
                <!-- Cart -->
                <div id="checkout-cart" class="content">
                    <div class="col-12 row">

                        <div class="col-12">
                            <h6 class="fw-semibold">1. Informations générales</h6>
                            <hr class="mt-0" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="Nom">Nom</label>
                            <input type="text" id="Nom" class="form-control" placeholder="John" name="Nom" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="Prenom">Prenom</label>
                            <input class="form-control" type="text" id="Prenom" name="Prenom" placeholder="Doe" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="CIN">CIN</label>
                            <input class="form-control" type="text" id="CIN" name="CIN" placeholder="AA1111" />
                        </div>

                        <div class="col-md-6">
                            <label for="flatpickr-date" class="form-label">Date Naissance</label>
                            <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="flatpickr-date" name="DateNaissance" required />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="LieuNaissance">Lieu de naissanca</label>
                            <input class="form-control" type="email" id="LieuNaissance" name="LieuNaissance" placeholder="Rabat" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="form-repeater-1-4">Situation Familiale</label>
                            <select id="form-repeater-1-4" class="form-select" name="SituationFamiliale">
                                <option value="Célibataire">Célibataire</option>
                                <option value="Marié">Marié</option>
                                <option value="Divorcé">Divorcé</option>
                                <option value="Manager">Veuf</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="NombreEnfants">Nombre Enfants</label>
                            <input class="form-control" type="number" id="NombreEnfants" name="NombreEnfants" placeholder="##" min="0" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="Nationalite">Nationalite</label>
                            <input class="form-control" type="text" id="Nationalite" name="Nationalite" placeholder="Marocaine" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="Adresse_1">Adresse 1</label>
                            <input class="form-control" type="text" id="Adresse_1" name="Adresse_1" placeholder="Enter Adresse" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="Adresse_2">Adresse 2</label>
                            <input class="form-control" type="text" id="Adresse_2" name="Adresse_2" placeholder="Enter Adresse (Optional)" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="Code_Postal">Code Postal</label>
                            <input class="form-control" type="text" id="Code_Postal" name="Code_Postal" placeholder="20000" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="Email">Email</label>
                            <input class="form-control" type="email" id="Email" name="Email" placeholder="john.doe" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="TelephoneFixe">Telephone Fixe</label>
                            <input class="form-control" type="text" id="TelephoneFixe" name="TelephoneFixe" placeholder="00 00 00 00 00" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="TelephonePortable">Telephone Portable</label>
                            <input class="form-control" type="text" id="TelephonePortable" name="TelephonePortable" placeholder="00 00 00 00 00" />
                        </div>

                        <div class="col-md-6">
                            <label for="PhotoIdentite" class="form-label">Photo Identite</label>
                            <input class="form-control" type="file" id="PhotoIdentite" name="PhotoIdentite">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="form-repeater-1-4">Profil</label>
                            <select id="form-repeater-1-4" class="form-select" name="Profil">
                                <option value="Interne">Interne</option>
                                <option value="Externe">Externe</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="NumeroCNSS">Numero CNSS</label>
                            <input class="form-control" type="text" id="NumeroCNSS" name="NumeroCNSS" placeholder="AA1111" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="ResponsableHierarchique">Responsable hiérarchique</label>
                            <select id="form-repeater-1-4" class="form-select" name="ResponsableHierarchique">
                                <option value="Imane">Imane</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="Poste">Poste</label>
                            <select id="form-repeater-1-4" class="form-select" name="Poste">
                                <option value="RH">RH</option>
                                <option value="Developer">Developer</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="DateEmbauche">Date Embauche</label>
                            <input type="text" class="form-control flatpickr-validation" name="DateEmbauche" id="DateEmbauche" required />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="DepartementAffectation">Departement Affectation</label>
                            <select id="form-repeater-1-4" class="form-select" name="DepartementAffectation">
                                <option value="DG">DG</option>
                                <option value="DSI">DSI</option>
                                <option value="SUP">SUP</option>
                                <option value="TCA">TCA</option>
                                <option value="TGE">TGE</option>
                                <option value="COP">COP</option>
                                <option value="LAS">LAS</option>
                                <option value="MMS">MMS</option>
                                <option value="DRO">DRO</option>
                                <option value="SIG">SIG</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="ContratTravailNumero">Contrat Travail Numero</label>
                            <input class="form-control" type="text" id="ContratTravailNumero" name="ContratTravailNumero" placeholder="##########" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="TypeContrat">Type de contrat</label>
                            <select id="form-repeater-1-4" class="form-select" name="TypeContrat">
                                <option value="CDI">CDI</option>
                                <option value="CDD">CDD</option>
                            </select>
                        </div>


                        <div class="col-md-6">
                            <label for="contrat-range" class="form-label">Contrat Du</label>
                            <input type="text" class="form-control" placeholder="YYYY-MM-DD Au YYYY-MM-DD" id="contrat-range" name="ContratRange" />
                        </div>

                        <div class="col-12">
                            <div class="col-12">
                                <h6 class="mt-2 fw-semibold">2. Add Langues</h6>
                                <hr class="mt-0" />
                            </div>
                            <div class="content-wrapper-language">
                                <div class="content-language">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-2 col-12 mb-3">
                                            <label class="form-label" for="language-input">Langues</label>
                                            <input type="text" id="language-input" name="langue" class="form-control" placeholder="Language name">
                                        </div>
                                        <div class="col-lg-6 col-xl-2 col-12 mb-3">
                                            <label class="form-label" for="level-select">Niveau</label>
                                            <select id="level-select" class="form-select" name="niveau">
                                                <option value="Débutant">Débutant</option>
                                                <option value="Intermédiaire">Intermédiaire</option>
                                                <option value="Avancé">Avancé</option>
                                                <option value="Courant">Courant</option>
                                                <option value="Langue maternelle">Langue maternelle</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-xl-2 col-12 d-flex align-items-end mb-3">
                                            <button class="btn btn-danger btn-remove"><i class="fa fa-trash"></i> Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="actions mb-4">
                                <button type="button" class="btn btn-primary btn-add"><i class="fa fa-plus"></i> Add Language</button>
                            </div>
                            <div class="col-12">
                                <div class="col-12 d-flex justify-content-between">
                                    <button type="button" class="btn btn-label-secondary btn-prev" disabled> <i class="ti ti-arrow-left me-sm-1"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ti ti-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Address -->
                <div id="checkout-address" class="content">
                    <div class="col-12">
                        <div class="col-12">
                            <h6 class="mt-2 fw-semibold">2. Cursus</h6>
                            <hr class="mt-0" />
                        </div>
                        <div class="content-wrapper-cursus">
                            <div class="content-cursus">
                                <div class="row">
                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label class="form-label" for="level-select">Niveau d’études</label>
                                        <select id="niveau_etude" class="form-select">
                                            <option value="BAC">BAC</option>
                                            <option value="BAC+1">BAC+1</option>
                                            <option value="BAC+2">BAC+2</option>
                                            <option value="LICENCE">LICENCE</option>
                                            <option value="MASTER">MASTER</option>
                                            <option value="DOCTORAT">DOCTORAT</option>
                                        </select>
                                    </div>

                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label class="form-label" for="cursus-input">Intitulé diplôme</label>
                                        <input type="text" id="intitule" class="form-control" placeholder="Entrer Intitulé diplôme">
                                    </div>

                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label class="form-label" for="formValidationEmbauche">Année d’obtention</label>
                                        <input type="text" class="form-control flatpickr-validation" id="obtention" placeholder="YYYY-MM-DD" required />
                                    </div>

                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label class="form-label" for="cursus-range">Date de</label>
                                        <input type="text" class="form-control" placeholder="YYYY-MM-DD Au YYYY-MM-DD" id="cursus-range" />
                                    </div>

                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label class="form-label" for="cursus-input">Etablissement Scolaire</label>
                                        <input type="text" id="etablissement" class="form-control" placeholder="Entrer Etablissement Scolaire">
                                    </div>

                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label class="form-label" for="cursus-input">Pays Etablissement Scolaire</label>
                                        <input type="text" id="pays" class="form-control" placeholder="Entrer Pays Etablissement Scolaire">
                                    </div>

                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label for="formValidationFile" class="form-label">Diplôme</label>
                                        <input class="form-control" type="file" id="diplome-cursus">
                                    </div>
                                    <div class="actions">
                                        <button type="button" class="btn btn-primary btn-save"><i class="fa fa-plus"></i>Save Cursus</button>
                                    </div>
                                    <div class="row content-cursus-map">
                                    </div>
                                    <hr class="mt-0" />
                                </div>
                                <div class="col-12 d-flex justify-content-between">
                                    <button type="button" class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ti ti-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment -->
                <div id="checkout-payment" class="content">
                    <div class="col-12">
                        <div class="col-12">
                            <h6 class="mt-2 fw-semibold">3. Formation</h6>
                            <hr class="mt-0" />
                        </div>
                        <div class="content-wrapper-formation">
                            <div class="content-formation">
                                <div class="row">
                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label class="form-label" for="formation-input">Intitulé formation</label>
                                        <input type="text" id="intitule-formation" class="form-control" placeholder="Entrer Intitulé formation">
                                    </div>

                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label class="form-label" for="formation-input">Etablissement Formation</label>
                                        <input type="text" id="etablissement-formation" class="form-control" placeholder="Entrer Etablissement Formation">
                                    </div>

                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label class="form-label" for="formation-range">Date de</label>
                                        <input type="text" class="form-control" placeholder="YYYY-MM-DD Au YYYY-MM-DD" id="formation-range" />
                                    </div>

                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label class="form-label" for="formation-input">Lieu</label>
                                        <input type="text" id="lieu-formation" class="form-control" placeholder="Entrer Lieu Etablissement">
                                    </div>

                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label for="formValidationFile" class="form-label">Attestation / Diplôme formation</label>
                                        <input class="form-control" type="file" id="diplome-formation">
                                    </div>
                                    <div class="actions">
                                        <button type="button" class="btn btn-primary btn-save-formation"><i class="fa fa-plus"></i> Save formation</button>
                                    </div>
                                    <div class="row content-formation-map">
                                    </div>
                                    <hr class="mt-0" />
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <button type="button" class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1"></i>
                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                            </button>
                            <button type="button" class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ti ti-arrow-right"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Confirmation -->
                <div id="checkout-confirmation" class="content">
                    <p class="fw-semibold mb-2">Account</p>
                    <ul class="list-unstyled">
                        <li>Username</li>
                        <li>exampl@email.com</li>
                    </ul>
                    <hr>
                    <p class="fw-semibold mb-2">Personal Info</p>
                    <ul class="list-unstyled">
                        <li>First Name</li>
                        <li>Last Name</li>
                        <li>Country</li>
                        <li>Language</li>
                    </ul>
                    <hr>
                    <p class="fw-semibold mb-2">Address</p>
                    <ul class="list-unstyled">
                        <li>Address</li>
                        <li>Landmark</li>
                        <li>Pincode</li>
                        <li>City</li>
                    </ul>
                    <hr>
                    <p class="fw-semibold mb-2">Social Links</p>
                    <ul class="list-unstyled">
                        <li>https://twitter.com/abc</li>
                        <li>https://facebook.com/abc</li>
                        <li>https://plus.google.com/abc</li>
                        <li>https://linkedin.com/abc</li>
                    </ul>
                    <div class="col-12 d-flex justify-content-between">
                        <button type="button" class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button type="submit" class="btn btn-success btn-submit">Create Employee</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>






@endsection
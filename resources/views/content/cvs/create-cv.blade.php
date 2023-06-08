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
        var formData = new FormData($('#wizard-checkout-form')[0]);
        let toFill = [];
        for (const [key, value] of formData.entries()) {
            if (key != 'Adresse_2') {
                if (!value) {
                    toFill.push(key);
                }
            }
        }
        if (false) {
            alert('Please fill the fields : ' + toFill.join(', '));
            return false;
        } else {
            var formationsArray = JSON.parse(localStorage.getItem('formationsArray')),
                refsArray = JSON.parse(localStorage.getItem('refsArray'));
                projetsArray = JSON.parse(localStorage.getItem('projetsArray'));

            formData.append('formations', JSON.stringify(formationsArray));
            formData.append('experiences', JSON.stringify(refsArray));
            formData.append('projets', JSON.stringify(projetsArray));

            for (var pair of formData.entries()) {
                console.log(pair[0] + ', ' + pair[1]);
            }
            $.ajax({
                url: "{{ route('cv-store') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        alert('Données de CV enregistrées');
                        window.location.href = baseUrl + "cv/gestion";
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
            <div class="d-flex justify-content-center step" style="min-width:25%; max-width:30%" data-target="#checkout-cart">
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
            <div class="d-flex justify-content-center step" style="min-width:25%; max-width:30%" data-target="#checkout-address">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-icon">
                        <svg viewBox="0 0 54 54">
                            <use xlink:href="{{asset('assets/svg/icons/wizard-checkout-address.svg#wizardCheckoutAddress')}}"></use>
                        </svg>
                    </span>
                    <span class="bs-stepper-label">Cursus / Formations</span>
                </button>
            </div>
            <div class="line">
                <i class="ti ti-chevron-right"></i>
            </div>
            <div class="d-flex justify-content-center step" style="min-width:25%; max-width:30%" data-target="#checkout-payment">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-icon">
                        <svg viewBox="0 0 58 54">
                            <use xlink:href="{{asset('assets/svg/icons/form-wizard-social-link.svg#wizardSocialLink')}}"></use>
                        </svg>
                    </span>
                    <span class="bs-stepper-label">Expériences</span>
                </button>
            </div>
            <div class="line">
                <i class="ti ti-chevron-right"></i>
            </div>
            <div class="d-flex justify-content-center step" style="min-width:25%; max-width:30%" data-target="#projets-step">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-icon">
                        <svg viewBox="0 0 58 54">
                            <use xlink:href="{{asset('assets/svg/icons/form-wizard-social-link.svg#wizardSocialLink')}}"></use>
                        </svg>
                    </span>
                    <span class="bs-stepper-label">Projets</span>
                </button>
            </div>
            <div class="line">
                <i class="ti ti-chevron-right"></i>
            </div>
            <div class="d-flex justify-content-center step" style="min-width:25%; max-width:30%" data-target="#checkout-confirmation">
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
                <!-- Infos -->
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
                            <input type="text" class="form-control" placeholder="DD-MM-YYYY" id="flatpickr-date" name="DateNaissance" required />
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
                            <input class="form-control" type="text" id="NumeroCNSS" name="NumeroCNSS" placeholder="" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="ResponsableHierarchique">Responsable hiérarchique
                            </label>
                            <select id="form-repeater-1-4" class="form-select" name="ResponsableHierarchique">
                                <option value="">Selectionner un responsable</option>
                                @foreach($rhs as $rh)
                                <option value="{{$rh->rhNom}}">{{$rh->rhNom}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="Poste">Poste</label>
                            <select id="form-repeater-1-4" class="form-select" name="Poste">
                                <option value="">Selectionner un poste</option>
                                @foreach($posts as $post)
                                <option value="{{$post->postNom}}">{{$post->postNom}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="DateEmbauche">Date Embauche</label>
                            <input type="text" class="form-control" name="DateEmbauche" placeholder="DD-MM-YYYY" id="flatpickr-dateEmbauche" required />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="DepartementAffectation">Departement Affectation</label>
                            <select id="form-repeater-1-4" class="form-select" name="DepartementAffectation">
                                <option value="">Selectionner un departement</option>
                                @foreach($departements as $departement)
                                    <option value="{{$departement->departementNom}}">{{$departement->departementNom}}</option>
                                @endforeach
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
                            <label class="form-label" for="DateEmbauche">Contrat Date Debut</label>
                            <input type="text" class="form-control" name="ContratDu" placeholder="DD-MM-YYYY" id="flatpickr-dateDu" required />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="DateEmbauche">Contrat Date Fin</label>
                            <input type="text" class="form-control" name="ContratAu" placeholder="DD-MM-YYYY" id="flatpickr-dateAu" />
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
                                            <label class="form-label" for="language-input">Langue</label>
                                            <input type="text" id="language-input" name="langue" class="form-control" placeholder="Nom de langue">
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
                                            <button class="btn btn-danger btn-remove"><i class="fa fa-trash"></i> Supprimer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="actions mb-4">
                                <button type="button" class="btn btn-primary btn-add-language"><i class="fa fa-plus"></i> Ajouter une langue</button>
                            </div>
                            <div class="col-12">
                                <div class="col-12 d-flex justify-content-between">
                                    <button type="button" class="btn btn-label-secondary btn-prev" disabled> <i class="ti ti-arrow-left me-sm-1"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Précédent</span>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Suivant</span> <i class="ti ti-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Cursus -->
                <div id="checkout-address" class="content">
                    <div class="col-12">
                        <div class="col-12">
                            <h6 class="mt-2 fw-semibold">2. Cursus & Formations</h6>
                            <hr class="mt-0" />
                        </div>
                        <div class="content-wrapper-cursus">
                            <div class="content-cursus">
                                <div class="row">
                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label class="form-label" for="cursus-input">Intitulé diplôme</label>
                                        <input type="text" id="intitule" class="form-control" placeholder="Entrer Intitulé diplôme">
                                    </div>

                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label class="form-label" for="formValidationEmbauche">Année d'obtention</label>
                                        <input type="text" class="form-control" id="obtention" placeholder="YYYY" />
                                    </div>

                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label class="form-label" for="cursus-input">Etablissement Scolaire</label>
                                        <input type="text" id="etablissement" class="form-control" placeholder="Entrer Etablissement Scolaire">
                                    </div>

                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label for="formValidationFile" class="form-label">Attestation / Diplôme formation (s'il y a)</label>
                                        <input class="form-control" type="file" id="diplome">
                                    </div>

                                    <div class="actions mb-3">
                                        <button type="button" class="btn btn-primary btn-save"><i class="fa fa-plus"></i>Save Cursus</button>
                                    </div>
                                    <div class="row content-cursus-map">
                                    </div>
                                    <hr class="mt-0" />
                                </div>
                                <div class="col-12 d-flex justify-content-between">
                                    <button type="button" class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Précédent</span>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Suivant</span> <i class="ti ti-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="checkout-payment" class="content">
                    <div class="col-12">
                        <div class="col-12">
                            <h6 class="mt-2 fw-semibold">3. Experiences Professionnelles</h6>
                            <hr class="mt-0" />
                        </div>
                        <div class="content-wrapper-refs">
                            <div class="content-refs">
                                <div class="row">
                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label class="form-label" for="ref-employeur">Employeur</label>
                                        <input type="text" id="ref-employeur" class="form-control" placeholder="Etafat">
                                    </div>
                                    
                                    <div class="col-md-6 col-xl-3 col-12 mb-3">
                                        <label class="form-label" for="DateEmbauche">Date Debut</label>
                                        <input type="text" class="form-control" placeholder="DD-MM-YYYY" id="exp-dateDu" required />
                                    </div>

                                    <div class="col-md-6 col-xl-3 col-12 mb-3">
                                        <label class="form-label" for="DateEmbauche">Date Fin</label>
                                        <input type="text" class="form-control" placeholder="DD-MM-YYYY" id="exp-dateAu" />
                                    </div>

                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label class="form-label" for="ref-poste">Poste</label>
                                        <input type="text" id="ref-poste" class="form-control" placeholder="Directeur Etudes">
                                    </div>

                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label for="ref-taches" class="form-label">Taches (splite with comma)</label>
                                        <textarea class="form-control" id="ref-taches" rows="3" placeholder="Tache 1, Tache 2, Tache 3"></textarea>
                                    </div>
                                    <div class="actions">
                                        <button type="button" class="btn btn-primary btn-save-ref mb-3"><i class="fa fa-plus"></i> Save Experience</button>
                                    </div>
                                    <div class="row content-projets-map">
                                    </div>
                                    <hr class="mt-0" />
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <button type="button" class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1"></i>
                                <span class="align-middle d-sm-inline-block d-none">Précédent</span>
                            </button>
                            <button type="button" class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Suivant</span> <i class="ti ti-arrow-right"></i></button>
                        </div>
                    </div>
                </div>

                <div id="projets-step" class="content">
                    <div class="col-12">
                        <div class="col-12">
                            <h6 class="mt-2 fw-semibold">3. Projets Realise</h6>
                            <hr class="mt-0" />
                        </div>
                        <div class="content-wrapper-projets">
                            <div class="content-projets">
                                <div class="row">
                                    <div class="col-md-3 mb-4">
                                        <label for="selectpickerLiveSearch" class="form-label">Reference</label>
                                        <select id="selectpickerLiveSearch" class="projet-idRef selectpicker w-100" data-style="btn-default" data-live-search="true">
                                            <option value="" data-tokens="">Selectionner une Reference</option>    
                                            @foreach($objRefs as $ref)
                                            <option value="{{$ref['id']}}-{{$ref['nMarche']}} ({{$ref['client']}})" data-tokens="{{$ref['id']}}">{{$ref['nMarche']}} ({{$ref['client']}})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="selectpickerLiveSearch" class="form-label">Poste</label>
                                        <select id="selectpickerLiveSearch" class="projet-poste selectpicker w-100" data-style="btn-default" data-live-search="true">
                                            <option value="" data-tokens="">Selectionner un poste</option>
                                            @foreach($posts as $post)
                                                <option value="{{$post->postNom}}" data-tokens="{{$post->postNom}}">{{$post->postNom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="selectpickerLiveSearch" class="form-label">Missions (séparées par une virgule)</label>
                                        <textarea class="form-control" id="projet-missions" rows="3" placeholder="Mission 1, Mission 2, Mission 3"></textarea>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="selectpickerLiveSearch" class="form-label">Description des missions</label>
                                        <textarea class="form-control" id="projet-desc" rows="3"></textarea>
                                    </div>
                                    <div class="actions">
                                        <button type="button" class="btn btn-primary btn-save-projet mb-3"><i class="fa fa-plus"></i> Save Projet</button>
                                    </div>
                                    <div class="row content-formation-map">
                                    </div>
                                    <hr class="mt-0" />
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <button type="button" class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1"></i>
                                <span class="align-middle d-sm-inline-block d-none">Précédent</span>
                            </button>
                            <button type="button" class="btn btn-primary btn-next" data-target="#checkout-confirmation"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Suivant</span> <i class="ti ti-arrow-right"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Confirmation -->
                <div id="checkout-confirmation" class="content">
                    <p>Informations</p>
                    <div class="col-12 d-flex justify-content-between">
                        <button type="button" class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1"></i>
                            <span class="align-middle d-sm-inline-block d-none">Précédent</span>
                        </button>
                        <button type="submit" class="btn btn-success btn-submit">Créer un CV</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>






@endsection
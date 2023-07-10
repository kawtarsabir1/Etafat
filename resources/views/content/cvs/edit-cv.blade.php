@extends('layouts/layoutMaster')

@section('title', 'Modifier')

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
<script src="{{asset('assets/js/forms-pickers.js')}}"></script>
<script src="{{asset('assets/js/forms-extras-edit.js')}}"></script>
<script src="{{asset('assets/js/form-validation.js')}}"></script>
<script src="{{asset('assets/js/wizard-ex-checkout.js')}}"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-update").click(function(e) {
        e.preventDefault();
        var formData = new FormData($('#wizard-checkout-form')[0]);
        let toFill = [];
        var userId = $('#userId').val();

        for (const [key, value] of formData.entries()) {
            if (key != 'Adresse_2') {
                if (!value) {
                    toFill.push(key);
                }
            }
        }
        console.log('start updating')
        if (toFill.length > 0) {
            alert('Please fill the fields : ' + toFill.join(', '));
            return false;
        } else {
            var formationsArray = JSON.parse(localStorage.getItem('formationsArray'));
            var refsArray = JSON.parse(localStorage.getItem('refsArray'));
            var projetsArray = JSON.parse(localStorage.getItem('projetsArray'));
            formData.append('formations', JSON.stringify(formationsArray));
            formData.append('experiences', JSON.stringify(refsArray));
            formData.append('projets', JSON.stringify(projetsArray));
            //send form data to the controller
            $.ajax({
                url: baseUrl + "cv/gestion/" + userId,
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        // alert(data.success);
                        window.location.href = "{{ route('cv-gestion') }}";
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
    <span class="text-muted fw-light">CVthèque /</span> Edit CV {{ $objEmployee['nom'] }}
</h4>
<input type="hidden" id="myDataInput" value="{{ json_encode($objEmployee) }}">
<input type="hidden" id="userId" value="{{ json_encode($objEmployee['id']) }}">
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
                    <span class="bs-stepper-label">Experiences</span>
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
            <div class="d-flex justify-content-center step" style="min-width:25%; max-width:30%" data-target="#checkout-confirmation" onclick="FillConfirmation()">
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
                            <input type="text" id="Nom" class="form-control" placeholder="John" name="Nom" value="{{ $objEmployee['nom'] }}" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="Prenom">Prenom</label>
                            <input class="form-control" type="text" id="Prenom" name="Prenom" placeholder="Doe" value="{{ $objEmployee['prenom'] }}" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="CIN">CIN</label>
                            <input class="form-control" type="text" id="CIN" name="CIN" placeholder="AA1111" value="{{ $objEmployee['cin'] }}" />
                        </div>

                        <div class="col-md-6">
                            <label for="flatpickr-date" class="form-label">Date Naissance</label>
                            <input type="text" class="form-control" placeholder="DD-MM-YYYY" id="flatpickr-date" name="DateNaissance" value="{{ $objEmployee['dateNaissance'] }}" required />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="LieuNaissance">Lieu de naissanca</label>
                            <input class="form-control" type="email" id="LieuNaissance" name="LieuNaissance" placeholder="Rabat" value="{{ $objEmployee['lieuNaissance'] }}" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="form-repeater-1-4">Situation Familiale</label>
                            <select id="form-repeater-1-4" class="form-select" name="SituationFamiliale">
                                <option value="Célibataire" {{ $objEmployee['situationFamiliale'] == 'Célibataire' ? 'selected' : '' }}>Célibataire</option>
                                <option value="Marié" {{ $objEmployee['situationFamiliale'] == 'Marié' ? 'selected' : '' }}>Marié</option>
                                <option value="Divorcé" {{ $objEmployee['situationFamiliale'] == 'Divorcé' ? 'selected' : '' }}>Divorcé</option>
                                <option value="Veuf" {{ $objEmployee['situationFamiliale'] == 'Veuf' ? 'selected' : '' }}>Veuf</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="NombreEnfants">Nombre Enfants</label>
                            <input class="form-control" type="number" id="NombreEnfants" name="NombreEnfants" placeholder="##" min="0" value="{{ $objEmployee['nombreEnfants'] }}" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="Nationalite">Nationalite</label>
                            <input class="form-control" type="text" id="Nationalite" name="Nationalite" placeholder="Marocaine" value="{{ $objEmployee['nationalite'] }}" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="Adresse_1">Adresse 1</label>
                            <input class="form-control" type="text" id="Adresse_1" name="Adresse_1" placeholder="Enter Adresse" value="{{ $objEmployee['adresse'] }}" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="Adresse_2">Adresse 2</label>
                            <input class="form-control" type="text" id="Adresse_2" name="Adresse_2" placeholder="Enter Adresse (Optional)" value="{{ $objEmployee['adresse2'] }}" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="Code_Postal">Code Postal</label>
                            <input class="form-control" type="text" id="Code_Postal" name="Code_Postal" placeholder="20000" value="{{ $objEmployee['postal'] }}" />
                        </div>

                        <div class="col-md-6">
                            <label for="PhotoIdentite" class="form-label">Photo Identite</label>
                            <input class="form-control" type="file" id="PhotoIdentite" name="PhotoIdentite">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="Email">Email</label>
                            <input class="form-control" type="email" id="Email" name="Email" placeholder="john.doe" value="{{ $objEmployee['email'] }}" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="TelephoneFixe">Telephone Fixe</label>
                            <input class="form-control" type="text" id="TelephoneFixe" name="TelephoneFixe" placeholder="00 00 00 00 00" value="{{ $objEmployee['telephoneFixe'] }}" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="TelephonePortable">Telephone Portable</label>
                            <input class="form-control" type="text" id="TelephonePortable" name="TelephonePortable" placeholder="00 00 00 00 00" value="{{ $objEmployee['telephonePortable'] }}" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="form-repeater-1-4">Profil</label>
                            <select id="form-repeater-1-4" class="form-select" name="Profil">
                                <option value="Interne" {{ $objEmployee['profil'] == 'Interne' ? 'selected' : '' }}>Interne</option>
                                <option value="Externe" {{ $objEmployee['profil'] == 'Externe' ? 'selected' : '' }}>Externe</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="NumeroCNSS">Numero CNSS</label>
                            <input class="form-control" type="text" id="NumeroCNSS" name="NumeroCNSS" placeholder="AA1111" value="{{ $objEmployee['cnss'] }}" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="ResponsableHierarchique">Responsable hiérarchique</label>
                            <select id="form-repeater-1-4" class="form-select" name="ResponsableHierarchique">
                                @foreach($rhs as $rh)
                                <option value="{{$rh->id}}" {{ $objEmployee['ResponsableHierarchique'] == $rh->id ? 'selected' : '' }}>{{$rh->rhNom}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="Poste">Poste</label>
                            <select id="form-repeater-1-4" class="form-select" name="Poste">
                                @foreach($posts as $post)
                                <option value="{{$post->id}}" {{ $objEmployee['Poste'] == $post->id ? 'selected' : '' }}>{{$post->postNom}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="DateEmbauche">Date Embauche</label>
                            <input type="text" class="form-control" name="DateEmbauche" id="flatpickr-dateEmbauche" value="{{ $objEmployee['DateEmbauche'] }}" required />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="DepartementAffectation">Departement Affectation</label>
                            <select id="form-repeater-1-4" class="form-select" name="DepartementAffectation">
                                @foreach($departements as $departement)
                                    <option value="{{$departement->id}}" {{ $objEmployee['DepartementAffectation'] == $departement->id ? 'selected' : '' }}>{{$departement->departementNom}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="ContratTravailNumero">Contrat Travail Numero</label>
                            <input class="form-control" type="text" id="ContratTravailNumero" name="ContratTravailNumero" placeholder="##########" value="{{ $objEmployee['ContratTravailNumero'] }}" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="TypeContrat">Type de contrat</label>
                            <select id="form-repeater-1-4" class="form-select" name="TypeContrat">
                                <option value="CDI" {{ $objEmployee['TypeContrat'] == 'CDI' ? 'selected' : '' }}>CDI</option>
                                <option value="CDD" {{ $objEmployee['TypeContrat'] == 'CDD' ? 'selected' : '' }}>CDD</option>
                            </select>
                        </div>


                        <!-- <div class="col-md-6">
                            <label for="contrat-range" class="form-label">Contrat Du</label>
                            <input type="text" class="form-control" placeholder="YYYY-MM-DD Au YYYY-MM-DD" id="contrat-range" name="ContratRange" value="{{ $objEmployee['ContratDu'] }} to {{ $objEmployee['ContratAu'] }}" />
                        </div> -->

                        <div class="col-md-6">
                            <label class="form-label" for="DateEmbauche">Contrat Date Debut</label>
                            <input type="text" class="form-control" name="ContratDu" placeholder="DD-MM-YYYY" id="flatpickr-dateDu" value="{{ $objEmployee['ContratDu'] }}" required />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="DateEmbauche">Contrat Date Fin</label>
                            <input type="text" class="form-control" name="ContratAu" placeholder="DD-MM-YYYY" id="flatpickr-dateAu" value="{{ $objEmployee['ContratAu'] }}"/>
                        </div>

                        <div class="col-12">
                            <div class="col-12">
                                <h6 class="mt-2 fw-semibold">2. Add Langues</h6>
                                <hr class="mt-0" />
                            </div>
                            <div class="content-wrapper-language">
                                @php
                                $langues = explode(',', $objEmployee['langue']);
                                $niveaux = explode(',', $objEmployee['niveauLangue']);
                                @endphp
                                <div class="content-language">
                                    @foreach ($langues as $index => $langue)
                                    <div class="row language-elem" id="language-elem">
                                        <div class="col-lg-6 col-xl-2 col-12 mb-3">
                                            <label class="form-label" for="language-input">Langue</label>
                                            <input type="text" id="language-input" value="{{ $langue }}" name="langue{{ $index == 0 ? '' : $index }}" class="form-control" placeholder="Nom du langue">
                                        </div>
                                        <div class="col-lg-6 col-xl-2 col-12 mb-3">
                                            <label class="form-label" for="level-select">Niveau</label>
                                            <select id="level-select" class="form-select" name="niveau{{ $index == 0 ? '' : $index }}">
                                                <option value="Débutant" {{ $niveaux[$index] === 'Débutant' ? 'selected' : '' }}>Débutant</option>
                                                <option value="Intermédiaire" {{ $niveaux[$index] === 'Intermédiaire' ? 'selected' : '' }}>Intermédiaire</option>
                                                <option value="Avancé" {{ $niveaux[$index] === 'Avancé' ? 'selected' : '' }}>Avancé</option>
                                                <option value="Courant" {{ $niveaux[$index] === 'Courant' ? 'selected' : '' }}>Courant</option>
                                                <option value="Langue maternelle" {{ $niveaux[$index] === 'Langue maternelle' ? 'selected' : '' }}>Langue maternelle</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-xl-2 col-12 d-flex align-items-end mb-3">
                                            <button class="btn btn-danger btn-remove"><i class="fa fa-trash"></i> Supprimer</button>
                                        </div>
                                    </div>
                                    @endforeach
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

                <!-- Address -->
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
                                        <button type="button" class="btn btn-primary btn-update-formations"><i class="fa fa-plus"></i>Save Cursus</button>
                                    </div>
                                    <div class="row content-cursus-map">
                                        @foreach ($objEmployee['formations'] as $index => $formation)
                                        <div class="col-lg-6 col-xl-4 mb-3 content-one-cursus">
                                            <div class="card card-action mb-4">
                                                <div class="card-alert"></div>
                                                <div class="card-header">
                                                    <div class="card-action-title">Formation n°{{$index+1}}</div>
                                                    <div class="card-action-element">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <a href="javascript:void(0);" id="cursus-{{$index+1}}" class="card-close"><i class="tf-icons ti ti-x ti-sm"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text niveau_etude-cursus">Intitulé : {{$formation['intitule']}}</p>
                                                    <p class="card-text">Niveau d'études : {{$formation['etablissement']}}</p>
                                                    <p class="card-text">Date d'obtention : {{$formation['obtention']}} </p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
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

                <!-- Payment -->
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
                                        <label class="form-label" for="ref-pay">Pay</label>
                                        <input type="text" id="ref-pay" class="form-control" placeholder="Directeur Etudes">
                                    </div>

                                    <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                        <label for="ref-taches" class="form-label">Taches (splite with comma)</label>
                                        <textarea class="form-control" id="ref-taches" rows="3" placeholder="Tache 1, Tache 2, Tache 3"></textarea>
                                    </div>
                                    <div class="actions mb-4">
                                        <button type="button" class="btn btn-primary btn-save-ref"><i class="fa fa-plus"></i> Save Experience</button>
                                    </div>
                                    <div class="row content-refs-map">
                                        @foreach ($objEmployee['refs'] as $index => $ref)
                                        <div class="col-lg-6 col-xl-4 mb-3 content-one-ref">
                                            <div class="card card-action mb-4">
                                                <div class="card-alert"></div>
                                                <div class="card-header">
                                                    <div class="card-action-title">Experience n°{{$index+1}}</div>
                                                    <div class="card-action-element">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <a href="javascript:void(0);" id="ref-{{$index+1}}" class="card-close"><i class="tf-icons ti ti-x ti-sm"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text niveau_etude-cursus"><span class="card-title">Employeur : </span>{{$ref['employeur']}}</p>
                                                    <p class="card-text"><span class="card-title">Poste : </span>{{$ref['poste']}}</p>
                                                    <p class="card-text"><span class="card-title">Pay : </span>{{$ref['pay']}}</p>
                                                    <p class="card-text">Date De {{$ref['dateDebut']}} Au {{$ref['dateDebut']}} </p>
                                                    <span class="card-title">Taches : </span>
                                                    <ul class="list-group list-group-flush">
                                                        @foreach ($ref['taches'] as $tache)
                                                        <li class="list-group-item">{{ $tache['tache'] }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
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
                                            @foreach($objEmployee['references'] as $ref)
                                            <option value="{{$ref['ID_Ref']}}-{{$ref['nMarche']}} ({{$ref['client']}})" data-tokens="{{$ref['ID_Ref']}}">{{$ref['nMarche']}} ({{$ref['client']}})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <label for="selectpickerLiveSearch" class="form-label">Poste</label>
                                        <select id="selectpickerLiveSearch" class="projet-poste selectpicker w-100" data-style="btn-default" data-live-search="true">
                                            <option value="" data-tokens="">Selectionner un poste</option>
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
                                    <div class="row content-projets-map">
                                        @foreach($objEmployee['projets'] as $index => $projet)
                                        <div class="col-lg-6 col-xl-4 mb-3 content-one-projet">
                                            <div class="card card-action mb-4">
                                                <div class="card-alert"></div>
                                                <div class="card-header">
                                                    <div class="card-action-title">Projet n°{{$index+1}}</div>
                                                    <div class="card-action-element">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <a href="javascript:void(0);" id="projet-{{$index+1}}" class="card-close"><i class="tf-icons ti ti-x ti-sm"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text niveau_etude-cursus"><span class="card-title">Reference : </span>{{$projet['ref']}}</p>
                                                    <p class="card-text"><span class="card-title">Poste : </span>{{$projet['poste']}}</p>
                                                    <p class="card-text"><span class="card-title">Missions :</p>
                                                    <ul class="list-group list-group-flush">
                                                        @foreach($projet['missions'] as $mission)
                                                            <li class="list-group-item">{{$mission}}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <hr class="mt-0" />
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <button type="button" class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1"></i>
                                <span class="align-middle d-sm-inline-block d-none">Précédent</span>
                            </button>
                            <button type="button" class="btn btn-primary btn-next" data-target="#checkout-confirmation" onclick="FillConfirmation()"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Suivant</span> <i class="ti ti-arrow-right"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Confirmation -->
                <div id="checkout-confirmation" class="content">
                    <div class="col-12 d-flex justify-content-between">
                        <button type="button" class="btn btn-label-secondary btn-prev">
                            <i class="ti ti-arrow-left me-sm-1"></i>
                            <span class="align-middle d-sm-inline-block d-none">Précédent</span>
                        </button>
                        <button type="submit" class="btn btn-success btn-submit">Create CV</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>



@endsection
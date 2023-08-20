@extends('layouts/layoutMaster')

@section('title', 'Edit Client')

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
        var contacts = [];
        var clientChamps = [
            "type", "nature", "fax", "adresse", "mail", "tel", "site", "ice", "rc", "if", "patente", "cnss", "rib", "ste", "capital"
        ];
        var currentContact = {};

        for (var pair of formData.entries()) {
            var name = pair[0];
            var value = pair[1];

            // Check if the current pair represents a new contact
            if (name.includes('nom') && !name.includes('prenom')) {
                if (Object.keys(currentContact).length !== 0) {
                    contacts.push(currentContact);
                }
                currentContact = {};
            }

            // Check if the field name is not in clientChamps array
            if (!clientChamps.includes(name)) {
                // Remove the index from the field name (e.g., "nom1" becomes "nom")
                name = name.replace(/\d+$/, '');

                // Set the value in the current contact object
                currentContact[name] = value;
            }
        }

        // Add the last contact to the array
        if (Object.keys(currentContact).length !== 0) {
            contacts.push(currentContact);
        }

        // Remove unwanted fields from formData
        for (var pair of formData.entries()) {
            var name = pair[0];
            if (!clientChamps.includes(name)) {
                formData.delete(name);
            }
        }

        // Append the contacts array as a stringified JSON object
        formData.append('contacts', JSON.stringify(contacts));

        for (var pair of formData.entries()) {
            console.log(pair[0] + ', ' + pair[1]);
        }

        id = $('#client_id').val();

        $.ajax({
            url: baseUrl + "update/client/" + id,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                if ($.isEmptyObject(data.error)) {
                    alert('Données de client modifiées avec succès');
                    window.location.href = baseUrl + "clients/gestion";
                } else {
                    printErrorMsg(data.error);
                }
            }
        });

    });

    function afficherChamps() {
        var type = document.getElementById("type").value;
        var divsMorale = document.getElementsByClassName("champs-morale");

        for (var i = 0; i < divsMorale.length; i++) {
            if (type === "Morale") {
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
        display: block;
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
                    <h5>Information générale du client</h5>
                    <input type="hidden" id="client_id" value="{{ $client ? $client->id : '' }}">
                    <div class="col-12 row">
                        <div class="mb-4 row">
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="type">Type du client :</label>
                                <select class="form-select" id="type" name="type" onchange="afficherChamps()">
                                    <option value="" selected>Selectionner le Type</option>
                                    <option {{ $client ? ($client->type == 'Physique' ? 'selected' : '') : '' }}>Physique</option>
                                    <option {{ $client ? ($client->type == 'Morale' ? 'selected' : '') : '' }}>Morale</option>
                                </select>  
                            </div>

                            <div class="col-md-6 mb-2 champs-morale"+ {{($client->type == 'Morale') ? 'style="display:block"' : 'style="display:none"'}}>
                                <label class="form-label" for="nature">Nature du client :</label>
                                <select class="form-select" id="nature" name="nature">
                                    <option value="" selected>Selectionner la nature</option>
                                    <option {{ $client ? ($client->nature == 'Privé' ? 'selected' : '') : '' }}>Privé</option>
                                    <option {{ $client ? ($client->nature == 'Public' ? 'selected' : '') : '' }}>Public</option>
                                    <option {{ $client ? ($client->nature == 'Semi-public' ? 'selected' : '') : '' }}>Semi-public</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="tel">Numéro de téléphone :</label>
                                <input class="form-control" type="text" id="tel" name="tel" placeholder="Entrer le numéro de téléphone" value="{{ $client ? $client->tel : '' }}" />
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="fax">Numéro de Fax :</label>
                                <input class="form-control" type="text" id="fax" name="fax" placeholder="Entrer le numéro de fax" value="{{ $client ? $client->fax : '' }}" />
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="mail">Adresse :</label>
                                <input class="form-control" type="text" id="adresse" name="adresse" placeholder="Entrer l'adresse" value="{{ $client ? $client->adresse : '' }}" />
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="mail">Adresse mail :</label>
                                <input class="form-control" type="text" id="mail" name="mail" placeholder="Entrer l'adresse mail" value="{{ $client ? $client->email : '' }}" />
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="site">Site web (s'il y a) :</label>
                                <input class="form-control" type="text" id="site" name="site" placeholder="Entrer le site web" value="{{ $client ? $client->site : '' }}" />
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="ice">ICE (Identifiant Commun Entreprise) :</label>
                                <input class="form-control" type="text" id="ice" name="ice" placeholder="Entrer l'ICE" value="{{ $client ? $client->ice : '' }}" />
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="rc">RC (Registre du commerce) :</label>
                                <input class="form-control" type="text" id="rc" name="rc" placeholder="Entrer le RC"  value="{{ $client ? $client->rc : '' }}" />
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="cnss">CNSS :</label>
                                <input class="form-control" type="text" id="cnss" name="cnss" placeholder="Entrer le CNSS" value="{{ $client ? $client->cnss : '' }}" />
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="if">IF (Identifiant Fiscal) :</label>
                                <input class="form-control" type="text" id="if" name="if" placeholder="Entrer l'IF" value="{{ $client ? $client->if : '' }}" />
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="patente">Patente :</label>
                                <input class="form-control" type="text" id="patente" name="patente" placeholder="Entrer la patente" value="{{ $client ? $client->patente : '' }}" />
                            </div>

                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="rib">RIB :</label>
                                <input class="form-control" type="text" id="rib" name="rib" placeholder="Entrer le RIB" value="{{ $client ? $client->rib : '' }}" />
                            </div>

                            <div class="col-md-6 mb-2 champs-morale" + {{($client->type == 'Morale') ? 'style="display:block"' : 'style="display:none"'}}
                                <label class="form-label" for="capital">Capital :</label>
                                <input class="form-control" type="text" id="capital" name="capital" placeholder="Entrer le capital" value="{{ $client ? $client->capital : '' }}" />
                            </div>

                            <div class="col-md-6 mb-2 champs-morale" + {{($client->type == 'Morale') ? 'style="display:block"' : 'style="display:none"'}}
                                <label class="form-label" for="ste">STE :</label>
                                <input class="form-control" type="text" id="ste" name="ste" placeholder="Entrer la STE" value="{{ $client ? $client->ste : '' }}" />
                            </div>
                        </div>
                        <hr>

                        <div class="mb-4">
                            <h5>Contacts liés au client</h5>
                            <div class="content-wrapper-contact">
                                @foreach ($contacts as $contact)
                                <div class="content-contact">
                                    <div class="row mb-4">
                                        <h6>Contact n°{{ $loop->iteration }}</h6>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label" for="nom">Nom :</label>
                                            <input class="form-control" id="nom" type="text" placeholder="Entrer le nom" name="nom{{ $loop->iteration }}" value="{{ $contact->nom }}" />
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label" for="prenom">Prenom :</label>
                                            <input class="form-control" type="text" placeholder="Entrer le prenom" name="prenom{{ $loop->iteration }}" id="prenom" value="{{ $contact->prenom }}" />
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label" for="poste">Poste :</label>
                                            <input class="form-control" type="text" placeholder="Entrer le poste" name="poste{{ $loop->iteration }}" id="poste" value="{{ $contact->fonction }}" />
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label" for="email">Mail :</label>
                                            <input class="form-control" type="text" placeholder="Entrer le mail" name="email{{ $loop->iteration }}" id="email" value="{{ $contact->email }}" />
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label" for="gsm">GSM :</label>
                                            <input class="form-control" type="text" placeholder="Entrer le gsm" name="gsm{{ $loop->iteration }}" id="gsm" value="{{ $contact->tel }}" />
                                        </div>
                                        <div class="col-lg-12 col-xl-2 col-12 d-flex align-items-end mb-3">
                                            <button class="btn btn-danger btn-remove"><i class="fa fa-trash"></i> Supprimer</button>
                                        </div>
                                        <input type="hidden" name="id_contact{{ $loop->iteration }}" value="{{ $contact->id }}">
                                    </div>
                                </div>
                                @endforeach
                                @if (count($contacts) == 0)
                                <div class="content-contact">
                                    <div class="row mb-4">
                                        <h6>Contact n°1 :</h6>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label" for="nom">Nom :</label>
                                            <input class="form-control" id="nom" type="text" placeholder="Entrer le nom" name="nom" />
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label" for="prenom">Prenom :</label>
                                            <input class="form-control" type="text" placeholder="Entrer le prenom" name="prenom" id="prenom" />
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label" for="poste">Poste :</label>
                                            <input class="form-control" type="text" placeholder="Entrer le poste" name="poste" id="poste" />
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label" for="email">Mail :</label>
                                            <input class="form-control" type="text" placeholder="Entrer le mail" name="email" id="email" />
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label class="form-label" for="gsm">GSM :</label>
                                            <input class="form-control" type="text" placeholder="Entrer le gsm" name="gsm" id="gsm" />
                                        </div>
                                        <input type="hidden" name="id_contact" value="">
                                        <div class="col-lg-12 col-xl-2 col-12 d-flex align-items-end mb-3">
                                            <button class="btn btn-danger btn-remove"><i class="fa fa-trash"></i> Supprimer</button>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
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
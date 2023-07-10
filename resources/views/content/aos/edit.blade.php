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
<script src="{{asset('assets/js/forms-selects.js')}}"></script>
<script src="{{asset('assets/js/multi-select.js')}}"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-update").click(function(e) {
        let id = $('#id_ao').val();
        e.preventDefault();
        var formData = new FormData($('#wizard-checkout-form')[0]);
        $.ajax({
            url: baseUrl + "ao/" + id,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                if ($.isEmptyObject(data.error)) {
                    alert('Données de AO modifiées avec succès.');
                    window.location.href = baseUrl + "ao/gestion";
                } else {
                    printErrorMsg(data.error);
                }
            }
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
    <span class="text-muted fw-light">Appels d'offers /</span> Edit AO
</h4>

<div class="row">
    <div id="" class="bs-stepper wizard-icons wizard-icons-example mt-2">
        <div class="bs-stepper-content">
            <form id="wizard-checkout-form" class="formInfos">
                <!-- @csrf -->
                <!-- Infos -->
                <div>
                    <input type="hidden" id="id_ao" name="id_ao" value="{{$ao->id_ao}}">
                    <div class="col-12 row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="type_ao">Type</label>
                            <select class="form-select" id="type_ao" name="type_ao">
                                <option selected>Selectionner le type</option>
                                @foreach($types as $type)
                                <option value="{{$type->type}}" {{ $ao->type_ao == $type->type ? 'selected' : '' }}>{{$type->type}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="pay_ao">Pays</label>
                            <select id="select2Basic" class="select2 pays-select form-select form-select-lg" name="pay_ao" data-allow-clear="true">
                                @foreach($pays as $pay)
                                <option value="{{$pay->pay}}" {{ $ao->pay_ao == $pay->pay ? 'selected' : '' }}>{{$pay->pay}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="secteur_ao">Secteur</label>
                            <select class="form-select" id="secteur_ao" name="secteur_ao">
                                <option selected>Selectionner le secteur</option>
                                @foreach($secteurs as $secteur)
                                <option value="{{$secteur->secteur}}" {{ $ao->secteur_ao == $secteur->secteur ? 'selected' : '' }}>{{$secteur->secteur}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="financement_ao">Financement</label>
                            <select class="form-select" id="financement_ao" name="financement_ao">
                                <option selected>Selectionner le financement</option>
                                @foreach($financements as $financement)
                                <option value="{{$financement->financement}}" {{ $ao->financement_ao == $financement->financement ? 'selected' : '' }}>{{$financement->financement}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="ministere_ao">Ministère de tutelle</label>
                            <select class="form-select" id="ministere_ao" name="ministere_ao">
                                <option selected>Selectionner le ministère</option>
                                @foreach($ministeres as $ministere)
                                <option value="{{$ministere->ministere}}" {{ $ao->ministere_ao == $ministere->ministere ? 'selected' : '' }}>{{$ministere->ministere}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="societe_ao">Sociète</label>
                            <select class="form-select" id="societe_ao" name="societe_ao">
                                <option value="" selected>Selectionner la Sociète</option>
                                @foreach($societes as $societe)
                                <option value="{{$societe->societeNom}}" {{ $ao->societe_ao == $societe->societeNom ? 'selected' : '' }}>{{$societe->societeNom}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="n_ao">N°AO</label>
                            <input class="form-control" type="text" id="n_ao" name="n_ao" placeholder="N°AO" value="{{$ao->n_ao}}" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="lot_ao">Lot N°</label>
                            <input class="form-control" type="text" id="lot_ao" name="lot_ao" placeholder="Lot N°" value="{{$ao->lot_ao}}" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="objet_ao">Objet</label>
                            <textarea class="form-control" id="objet_ao" name="objet_ao" rows="1" placeholder="Enter objet d'appel d'offre" >{{$ao->objet_ao}}</textarea>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="maître_ao">Maître d'ouvrage</label>
                            <input class="form-control" type="text" id="maître_ao" name="maître_ao" placeholder="Client" value="{{$ao->maître_ao}}" />
                        </div>

                        <div class="col-md-6 mb-4">
                            <label for="TagifyResponsablesList" class="form-label">Responsables</label>
                            <input id="TagifyResponsablesList" name="responsable" class="form-control" placeholder="Select responsables" value="{{$ao->responsable_ao}}" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="caution_provisoire_ao">Caution Provisoire</label>
                            <input class="form-control" type="text" id="caution_provisoire_ao" name="caution_provisoire_ao" placeholder="Caution Provisoire" value="{{$ao->caution_provisoire_ao}}" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="annulation_ao">Annulation caution</label>
                            <input class="form-control" type="text" id="annulation_ao" name="annulation_ao" placeholder="Annulation caution" value="{{$ao->annulation_ao}}" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="budget_ao">Budget</label>
                            <input class="form-control" type="text" id="budget_ao" name="budget_ao" placeholder="Budget" value="{{$ao->budget_ao}}" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="date_limit_ao">Date Limite</label>
                            <input type="text" class="form-control" id="date_limit_ao" name="date_limit_ao" placeholder="DD/MM/YYYY" required value="{{$ao->date_limit_ao}}" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="mantant_soumission_ao">Montant Soumission</label>
                            <input class="form-control" type="text" id="mantant_soumission_ao" name="mantant_soumission_ao" placeholder="Montant Soumission" value="{{$ao->mantant_soumission_ao}}" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="bu_ao">BU</label>
                            <select class="form-select" id="bu_ao" name="bu_ao">
                                <option selected>Selectionner le BU</option>
                                @foreach($bus as $bu)
                                <option value="{{$bu->buNom}}" {{ $ao->bu_ao == $bu->buNom ? 'selected' : '' }}>{{$bu->buNom}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="adjudication_ao">Adjudication</label>
                            <select class="form-select" id="adjudication_ao" name="adjudication_ao">
                                <option selected>Selectionner l'adjudication</option>
                                @foreach($adjudications as $adjudication)
                                <option value="{{$adjudication->adjudication}}" {{ $ao->adjudication_ao == $adjudication->adjudication ? 'selected' : '' }}>{{$adjudication->adjudication}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="date_adjudication_ao">Date Adjudication</label>
                            <input class="form-control" type="text" id="date_adjudication_ao" name="date_adjudication_ao" placeholder="DD/MM/YYYY" disabled value="{{$ao->date_adjudication_ao}}" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="motif_ao">Motif du rejet</label>
                            <select class="form-select" id="motif_ao" name="motif_ao">
                                <option selected>Selectionner le Motif</option>
                                @foreach($motifs as $motif)
                                <option value="{{$motif->motif}}" {{ $ao->motif_ao == $motif->motif ? 'selected' : '' }}>{{$motif->motif}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="rejet_ao">Rejet observation</label>
                            <input class="form-control" type="text" id="rejet_ao" name="rejet_ao" placeholder="Rejet observation" value="{{$ao->rejet_ao}}" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="adjudicataire_ao">Adjudicataire</label>
                            <input class="form-control" type="text" id="adjudicataire_ao" name="adjudicataire_ao" placeholder="Adjudicataire" value="{{$ao->adjudicataire_ao}}" />
                        </div>

                        <div class="col-md-6 mb-2">
                            <label class="form-label" for="mantant_moins_ao">Montant Moins Disant</label>
                            <input class="form-control" type="text" id="mantant_moins_ao" name="mantant_moins_ao" placeholder="Montant Moins Disant" value="{{$ao->mantant_moins_ao}}" />
                        </div>
                    </div>

                </div>

                <hr class="my-5" />

                <div>
                    <h5>La sélectionne des départements</h5>
                    <div class="content-wrapper-departement">
                        <div class="content-departement">
                            <div class="row">
                                <div class="col-md-4 mb-2">
                                    <label class="form-label" for="">Département Nom</label>
                                    <select class="form-select" id="departement" name="departement_nom">
                                        <option selected>Selectionner le Département</option>
                                        @foreach($departements as $departement)
                                        <option value="{{$departement->departementNom}}">{{$departement->departementNom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label class="form-label" for="">Département part</label>
                                    <input class="form-control" type="text" placeholder="Entrer le part du département" name="departement_part" />
                                </div>
                                <div class="col-lg-12 col-xl-2 col-12 d-flex align-items-end mb-3">
                                    <button class="btn btn-danger btn-remove"><i class="fa fa-trash"></i> Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="actions mb-4">
                        <button type="button" class="btn btn-primary btn-add-departement"><i class="fa fa-plus"></i> Ajouter une Département</button>
                    </div>
                </div>


                <hr class="my-5" />

                <div>
                    <h5>La sélectionne des partenaires</h5>
                    <div class="content-wrapper-partenaire">
                        <div class="content-partenaire">
                            <div class="row">
                                <div class="col-md-4 mb-2">
                                    <label class="form-label" for="">Partenaire Nom</label>
                                    <select class="form-select" id="partenaire" name="partenaire_nom">
                                        <option selected>Selectionner le Partenaire</option>
                                        @foreach($partenaires as $partenaire)
                                        <option value="{{$partenaire->partenaire}}">{{$partenaire->partenaire}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label class="form-label" for="">Partenaire part</label>
                                    <input class="form-control" type="text" placeholder="Entrer le part du Partenaire" name="partenaire_part" />
                                </div>
                                <div class="col-lg-12 col-xl-2 col-12 d-flex align-items-end mb-3">
                                    <button class="btn btn-danger btn-remove"><i class="fa fa-trash"></i> Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="actions mb-4">
                        <button type="button" class="btn btn-primary btn-add-partenaire"><i class="fa fa-plus"></i> Ajouter un Partenaire</button>
                    </div>
                </div>


                <hr class="my-5" />

                <div>
                    <h5>La sélectionne des Sous Traitants</h5>
                    <div class="content-wrapper-sousTraitant">
                        <div class="content-sousTraitant">
                            <div class="row">
                                <div class="col-md-4 mb-2">
                                    <label class="form-label" for="">Sous Traitants Nom</label>
                                    <select class="form-select" id="sousTraitant" name="sousTraitant_nom">
                                        <option selected>Selectionner le sousTraitant</option>
                                        @foreach($soustraitants as $soustraitant)
                                        <option value="{{$soustraitant->soustraitant}}">{{$soustraitant->soustraitant}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 mb-2">
                                    <label class="form-label" for="">Sous Traitants part</label>
                                    <input class="form-control" type="text" placeholder="Entrer le part du Sous Traitants" name="soustraitant_part" />
                                </div>
                                <div class="col-lg-12 col-xl-2 col-12 d-flex align-items-end mb-3">
                                    <button class="btn btn-danger btn-remove"><i class="fa fa-trash"></i> Supprimer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="actions mb-4">
                        <button type="button" class="btn btn-primary btn-add-sousTraitant"><i class="fa fa-plus"></i> Ajouter un Sous Traitants</button>
                    </div>

                    <div class="col-12">
                    <div class="col-12">
                        <div class="col-12 d-flex justify-content-between">
                            <button type="button" class="btn btn-label-secondary btn-prev">
                                <span class="align-middle d-sm-inline-block d-none" onclick="window.history.back();">Annuler</span>
                            </button>
                            <button type="button" class="btn btn-success btn-update"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Modifier</span></button>
                        </div>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>


</div>






@endsection
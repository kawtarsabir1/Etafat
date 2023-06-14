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
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-create").click(function(e) {
        e.preventDefault();
        var formData = new FormData($('#wizard-checkout-form')[0]);
        $.ajax({
            url: "{{ route('appel-offre-store') }}",
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                if ($.isEmptyObject(data.error)) {
                    alert('Données de AO enregistrées');
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
    <span class="text-muted fw-light">Appels d'offers /</span> Créer un nouveau AO
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
        <label class="form-label" for="type_ao">Type</label>
        <select class="form-select" id="type_ao" name="type_ao">
            <option selected>Selectionner le type</option>
            <option value="Consultation nationale">Consultation nationale</option>
            <option value="AO National">AO National</option>
            <option value="AMI">AMI</option>
        </select>
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="pay_ao">Pays</label>
        <input class="form-control" type="text" id="pay_ao" name="pay_ao" placeholder="Pays" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="secteur_ao">Secteur</label>
        <select class="form-select" id="secteur_ao" name="secteur_ao">
            <option selected>Selectionner le secteur</option>
            <option value="Infrastructures">Infrastructures</option>
            <option value="Energie">Energie</option>
            <option value="Inspection">Inspection</option>
        </select>
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="financement_ao">Financement</label>
        <input type="text" class="form-control" id="financement_ao" name="financement_ao" placeholder="Financement" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="ministere_ao">Ministère de tutelle</label>
        <input class="form-control" type="text" id="ministere_ao" name="ministere_ao" placeholder="Ministère de tutelle" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="n_ao">N°AO</label>
        <input class="form-control" type="text" id="n_ao" name="n_ao" placeholder="N°AO" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="marche_ao">MARCHE N°</label>
        <input class="form-control" type="text" id="marche_ao" name="marche_ao" placeholder="MARCHE N°" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="lot_ao">Lot N°</label>
        <input class="form-control" type="text" id="lot_ao" name="lot_ao" placeholder="Lot N°" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="objet_ao">Objet</label>
        <textarea class="form-control" id="objet_ao" name="objet_ao" rows="1"></textarea>
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="client_ao">Client</label>
        <input class="form-control" type="text" id="client_ao" name="client_ao" placeholder="Client" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="caution_provisoire_ao">Caution Provisoire</label>
        <input class="form-control" type="text" id="caution_provisoire_ao" name="caution_provisoire_ao" placeholder="Caution Provisoire" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="annulation_ao">Annulation caution</label>
        <input class="form-control" type="text" id="annulation_ao" name="annulation_ao" placeholder="Annulation caution" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="budget_ao">Budget</label>
        <input class="form-control" type="text" id="budget_ao" name="budget_ao" placeholder="Budget" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="date_limit_ao">Date Limite</label>
        <input type="text" class="form-control" id="date_limit_ao" name="date_limit_ao" placeholder="DD/MM/YYYY" required />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="mantant_soumission_ao">Montant Soumission</label>
        <input class="form-control" type="text" id="mantant_soumission_ao" name="mantant_soumission_ao" placeholder="Montant Soumission" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="bu_ao">BU</label>
        <select class="form-select" id="bu_ao" name="bu_ao">
            <option selected>Selectionner le BU</option>
            @foreach($bus as $bu)
            <option value="{{$bu->buNom}}">{{$bu->buNom}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="departement_ao">Département</label>
        <select class="form-select" id="departement_ao" name="departement_ao">
            <option selected>Selectionner le Département</option>
            @foreach($departements as $departement)
            <option value="{{$departement->departementNom}}">{{$departement->departementNom}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="responsable_ao">Responsable</label>
        <select class="form-select" id="responsable_ao" name="responsable_ao">
            <option selected>Selectionner le Responsable</option>
            @foreach($rhs as $rh)
            <option value="{{$rh->rhNom}}">{{$rh->rhNom}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="adjudication_ao">Adjudication</label>
        <input class="form-control" type="text" id="adjudication_ao" name="adjudication_ao" placeholder="Adjudication" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="date_adjudication_ao">Date Adjudication</label>
        <input class="form-control" type="text" id="date_adjudication_ao" name="date_adjudication_ao" placeholder="DD/MM/YYYY" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="motif_ao">Motif du rejet</label>
        <input class="form-control" type="text" id="motif_ao" name="motif_ao" placeholder="Motif du rejet" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="caution_definitive_ao">Caution Définitive</label>
        <input class="form-control" type="text" id="caution_definitive_ao" name="caution_definitive_ao" placeholder="Caution Définitive" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="rejet_ao">Rejet observation</label>
        <input class="form-control" type="text" id="rejet_ao" name="rejet_ao" placeholder="Rejet observation" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="adjudicataire_ao">Adjudicataire</label>
        <input class="form-control" type="text" id="adjudicataire_ao" name="adjudicataire_ao" placeholder="Adjudicataire" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="mantant_moins_ao">Montant Moins Disant</label>
        <input class="form-control" type="text" id="mantant_moins_ao" name="mantant_moins_ao" placeholder="Montant Moins Disant" />
    </div>

    <div class="col-md-6 mb-2">
        <label class="form-label" for="partenariat_ao">Partenariat</label>
        <input class="form-control" type="text" id="partenariat_ao" name="partenariat_ao" placeholder="Partenariat" />
    </div>

    <div class="col-md-6 mb-4">
        <label class="form-label" for="date_signature_ao">Date signature</label>
        <input class="form-control" type="text" id="date_signature_ao" name="date_signature_ao" placeholder="DD/MM/YYYY" />
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
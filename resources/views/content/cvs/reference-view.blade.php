@extends('layouts/layoutMaster')

@section('title', 'View - References')

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
<script src="{{asset('assets/js/multi-select.js')}}"></script>
<script src="{{asset('assets/js/wizard-ex-checkout.js')}}"></script>
<script src="https://cdn.tiny.cloud/1/8tfjkh53ljrw9556w1czhhfyvslie2pq78t3tmgejynutw12/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#ficheDesc',
        plugins: 'code table lists',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
    });
    tinymce.init({
        selector: 'textarea#ficheServices',
        plugins: 'code table lists',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
    });
</script>

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

            if (key == 'categories') {
                if (value != '') {
                    let json = JSON.parse(value);
                    let data = [];
                    for (let i = 0; i < json.length; i++) {
                        data.push(json[i].categoryNom);
                    }
                    formData.set('categories', data);
                } else {
                    toFill.push(key);
                }
            }

            if (key == 'groupement') {
                formData.set('groupement', 1);
            }
        }
        if (toFill.length > 0) {
            alert('Please fill the fields : ' + toFill.join(', '));
            return false;
        } else {
            $.ajax({
                url: baseUrl + "cv/reference/" + $('#ID_Ref').val(),
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    if ($.isEmptyObject(data.error)) {
                        alert('Référence modifiée avec succès');
                        window.location.href = baseUrl + "cv/references";
                    } else {
                        printErrorMsg(data.error);
                    }
                }
            });
        }
    });


    $(".generate-fich").click(function(e) {
        e.preventDefault();
        var formData = new FormData();
        formData.append('projet', $('#ficheProjet').val());
        var ficheDescContent = tinymce.get('ficheDesc').getContent();
        formData.append('description', ficheDescContent);
        var ficheServicesContent = tinymce.get('ficheServices').getContent();
        formData.append('services', ficheServicesContent);
        formData.append('client', $('#ficheClient').val());
        formData.append('objet', $('#ficheObjet').val());
        formData.append('logo', $('#ficheLogo')[0].files[0]);
        formData.append('localisation', $('#ficheLocal').val());

        $.ajax({
            url: "{{ route('fiche-generate') }}",
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                if ($.isEmptyObject(data.error)) {
                    $('#fiche').val(data.fileName);
                    alert('Fiche générée avec succès');
                    $('#largeModal').modal('hide');
                } else {
                    printErrorMsg(data.error);
                }
            }
        });
    });

</script>
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/wizard-ex-checkout.css')}}" />
@endsection


@section('content')
<h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">CVthèque /</span> View Reference
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
                                <div class="col-md-3">
                                <p><span class="fw-bold">Societe : </span>{{ $Ref->societe }}</p>
                                </div>
                                <div class="col-md-3">
                                <p><span class="fw-bold">Client : </span>{{ $Ref->client }}</p>
                                </div>
                                <div class="col-md-3">
                                <p><span class="fw-bold">N° du Reference : </span>{{ $Ref->nRef }}</p>
                                </div>
                                <div class="col-md-3">
                                <p><span class="fw-bold">N° Intern : </span>{{ $Ref->nIntern }}</p>
                                </div>
                                <div class="col-md-3">
                                <p><span class="fw-bold">N° Marché : </span>{{ $Ref->nMarche }}</p>
                                </div>
                                <div class="col-md-3">
                                <p><span class="fw-bold">Logo du client : </span>{{ $Ref->logo }}</p>
                                </div>

                                <div class="col-md-3">
                                <p><span class="fw-bold">Montant : </span>{{ $Ref->mantant }}</p>
                                </div>

                                <div class="col-md-3">
                                <p><span class="fw-bold">Montant du traveaux : </span>{{ $Ref->montantTraveaux }}</p>
                                </div>

                                <div class="col-md-3">
                                <p><span class="fw-bold">Année : </span>{{ $Ref->annee }}</p>
                                </div>

                                <div class="col-md-3">
                                <p><span class="fw-bold">Localisation : </span>{{ $Ref->localisation }}</p>
                                </div>

                                <div class="col-md-3">
                                <p><span class="fw-bold">Objet : </span>{{ $Ref->objet }}</p>
                                </div>

                                <div class="col-md-3">
                                <p><span class="fw-bold">Missions : </span>{{ $Ref->missions }}</p>
                                </div>

                                <div class="col-md-3">
                                <p><span class="fw-bold">Description des missions : </span>{{ $Ref->description }}</p>
                                </div>

                                <div class="col-md-3">
                                <p><span class="fw-bold">Catégories des missions : </span>{{ $Ref->categories }}</p>
                                </div>

                                <div class="col-md-3">
                                <p><span class="fw-bold">Part du societe : </span>{{ $Ref->part }} %</p>
                                </div>

                                <div class="col-md-12">
                                    <p class="fw-bold">Fiche du projet : </p>
                                    @php 
                                    if(false){
                                        echo '<iframe src="'.asset('storage/'.$Ref->attestation).'" width="100%" height="600px"></iframe>';
                                    }else{
                                        echo '<p class="text-danger">Aucun fichier</p>';
                                    }
                                    @endphp
                                </div>

                                <div class="col-md-12">
                                    <p class="fw-bold">Fiche du projet existant : </p>
                                    @php 
                                    if(false){
                                        echo '<iframe src="'.asset('storage/'.$Ref->attestation).'" width="100%" height="600px"></iframe>';
                                    }else{
                                        echo '<p class="text-danger">Aucun fichier</p>';
                                    }
                                    @endphp
                                </div>

                                <div class="col-md-12">
                                    <p class="fw-bold">Attestation : </p>
                                    @php 
                                    if(false){
                                        echo '<iframe src="'.asset('storage/'.$Ref->attestation).'" width="100%" height="600px"></iframe>';
                                    }else{
                                        echo '<p class="text-danger">Aucun fichier</p>';
                                    }
                                    @endphp
                                </div>







                                <!-- <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-client">N° du Reference</label>
                                    <input type="text" name="nRef" class="form-control" placeholder="##" value="{{ $Ref->nRef }}">
                                </div>
                                
                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-nIntern">N° Intern</label>
                                    <input type="text" name="nIntern" class="form-control" placeholder="##" value="{{ $Ref->nIntern }}">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-marche">N° Marché</label>
                                    <input type="text" name="nMarche" class="form-control" placeholder="26/2020/Exemple" value="{{ $Ref->nMarche }}" >
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-client">Client</label>
                                    <input type="text" name="client" class="form-control" placeholder="Etafat" value="{{ $Ref->client }}" />
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label for="formValidationFile" class="form-label">Logo de client</label>
                                    <input class="form-control" type="file" id="ficheLogo" name="logo">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-mantant">Montant</label>
                                    <input type="text" name="mantant" class="form-control" placeholder="100 000,00" value="{{ $Ref->mantant }}" >
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-client">Montant du traveaux</label>
                                    <input type="text" name="montantTraveaux" class="form-control" placeholder="1000000 DH" value="{{ $Ref->montantTraveaux }}" >
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-annee">Année</label>
                                    <input type="text" name="annee" class="form-control" placeholder="2023" value="{{ $Ref->annee }}">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-client">Localisation</label>
                                    <input type="text" name="localisation" id="ficheLocal" class="form-control" placeholder="Casablanca" value="{{ $Ref->localisation }}">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label for="formValidationFile" class="form-label">Attestation (s'il y a)</label>
                                    <input class="form-control" type="file" name="attestation">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label for="formValidationFile" class="form-label">Fiche du projet existant (s'il y a)</label>
                                    <input class="form-control" type="file" name="ficheExist">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label for="ref-objet" class="form-label">Objet</label>
                                    <textarea class="form-control" name="objet" rows="1" placeholder="Objet de reference">{{ $Ref->objet }}</textarea>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <label for="selectpickerLiveSearch" class="form-label">Missions (séparées par une virgule)</label>
                                    <textarea class="form-control" name="missions" rows="1" placeholder="Mission 1, Mission 2, Mission 3">{{ $Ref->missions }}</textarea>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <label for="selectpickerLiveSearch" class="form-label">Description des missions</label>
                                    <textarea class="form-control" name="description" rows="1">{{ $Ref->description }}</textarea>
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label for="TagifyCategoriesList" class="form-label">Catégories des missions (Même ordre des missions)</label>
                                    <input id="TagifyCategoriesList" name="categories" class="form-control" value="{{ $Ref->categories }}">
                                </div>

                                <div class="col-md-3 mb-4">
                                    <label for="" class="form-label">Groupement</label>
                                    <input class="form-check-input" id ="group-checkbox" name="groupement" type="checkbox" value="1" {{ $Ref->groupement == 1 ? 'checked' : '' }}>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <label for="" class="form-label">Part du societe</label>
                                    <input class="form-control" name="part" id="part" type="text" placeholder="100%" value="{{ $Ref->part }}" {{ $Ref->groupement == 1 ? '' : 'disabled' }}>
                                </div>

                                <div class="col-md-3 d-flex align-items-center mb-3">
                                    <input type="hidden" name="fiche" id="fiche" value="{{ $Ref->fiche }}">
                                    <button type="button" class="btn btn-primary btn-generate-fiche" data-bs-toggle="modal" data-bs-target="#largeModal">
                                        Générer fiche du projet
                                    </button>
                                </div>

                                <div class="col-12 d-flex justify-content-between">
                                    <button type="button" class="btn btn-label-secondary btn-prev">
                                        <span class="align-middle d-sm-inline-block d-none">Annuler</span>
                                    </button>
                                    <button type="button" class="btn btn-primary btn-create-ref"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Modifier la référence</span></button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Generate Fiche Projet</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameLarge" class="form-label">Projet</label>
                            <input type="text" id="ficheProjet" class="form-control" placeholder="Nom du Projet">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameLarge" class="form-label">Description de projet</label>
                            <textarea name="ficheDesc" id="ficheDesc"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nameLarge" class="form-label">Services fournis</label>
                            <textarea name="ficheServices" id="ficheServices"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success generate-fich">Sauvegarder</button>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- </div> -->






@endsection
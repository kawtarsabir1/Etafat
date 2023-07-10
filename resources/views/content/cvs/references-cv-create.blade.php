@extends('layouts/layoutMaster')

@section('title', 'Create')

@section('vendor-style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/trumbowyg@2.25.1/dist/ui/trumbowyg.min.css">
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

<script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.25.1/dist/trumbowyg.min.js"></script>
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
        let toFill = [];
        for (const [key, value] of formData.entries()) {
            if (key != 'attestation') {
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
        for (var pair of formData.entries()) {
            console.log(pair[0] + ', ' + pair[1]);
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

    $('.btn-cancel').click(function(e) {
        e.preventDefault();
        window.location.href = baseUrl + "cv/references";
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
                                    <select id="form-repeater-1-4" class="form-select" name="societe">
                                        <option value="">Sélectionner Societe</option>
                                        @foreach($societes as $societe)
                                        <option value="{{$societe->id}}">{{$societe->societeNom}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-client">N° du Reference</label>
                                    <input type="text" name="nRef" class="form-control" placeholder="##">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-nIntern">N° Intern</label>
                                    <input type="text" name="nIntern" class="form-control" placeholder="##">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-client">N° Marché</label>
                                    <input type="text" name="nMarche" class="form-control" placeholder="26/2020/Exemple">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-client">Client</label>
                                    <input type="text" name="client" id="ficheClient" class="form-control" placeholder="MASEN">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label for="formValidationFile" class="form-label">Logo de client</label>
                                    <input class="form-control" type="file" id="ficheLogo" name="logo">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-client">Montant</label>
                                    <input type="text" name="mantant" class="form-control" placeholder="1000000 DH">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-client">Montant du traveaux</label>
                                    <input type="text" name="montantTraveaux" class="form-control" placeholder="1000000 DH">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-annee">Année</label>
                                    <input type="text" name="annee" class="form-control" placeholder="2023">
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label class="form-label" for="ref-client">Localisation</label>
                                    <input type="text" name="localisation" id="ficheLocal" class="form-control" placeholder="Casablanca">
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
                                    <textarea class="form-control" name="objet" id="ficheObjet" rows="1" placeholder="Objet de reference"></textarea>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <label for="selectpickerLiveSearch" class="form-label">Missions (séparées par une virgule)</label>
                                    <textarea class="form-control" name="missions" rows="1" placeholder="Mission 1, Mission 2, Mission 3"></textarea>
                                </div>

                                <div class="col-md-3 mb-4">
                                    <label for="selectpickerLiveSearch" class="form-label">Description des missions</label>
                                    <textarea class="form-control" name="description" placeholder="Description" rows="1"></textarea>
                                </div>

                                <div class="col-lg-6 col-xl-3 col-12 mb-3">
                                    <label for="TagifyCategoriesList" class="form-label">Catégories des missions (Même ordre des missions)</label>
                                    <input id="TagifyCategoriesList" name="categories" class="form-control" />
                                </div>

                                <div class="col-md-3 mb-4">
                                    <label for="" class="form-label">Groupement</label>
                                    <input class="form-check-input" id="group-checkbox" name="groupement" type="checkbox">
                                </div>

                                <div class="col-md-3 mb-4">
                                    <label for="" class="form-label">Part du societe</label>
                                    <input class="form-control" name="part" id="part" type="text" placeholder="100%" disabled>
                                </div>

                                <div class="col-md-3 d-flex align-items-center mb-3">
                                    <input type="hidden" name="fiche" id="fiche">
                                    <button type="button" class="btn btn-primary btn-generate-fiche" data-bs-toggle="modal" data-bs-target="#largeModal">
                                        Générer fiche du projet
                                    </button>
                                </div>

                                <div class="col-12 d-flex justify-content-between">
                                    <button type="button" class="btn btn-label-secondary btn-cancel">
                                        <span class="align-middle d-sm-inline-block d-none">Annuler</span>
                                    </button>
                                    <button type="button" class="btn btn-success btn-create-ref"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Créer une référence</span></button>
                                </div>
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
@extends('layouts/layoutMaster')

@section('title', 'Generateur')

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
<link rel="stylesheet" href="{{asset('assets/vendor/libs/cvs/cardsCvs.css')}}" />
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
<!-- <script src="{{asset('assets/js/cards-actions.js')}}"></script> -->
<script src="{{asset('assets/js/wizard-ex-checkout.js')}}"></script>
<script src="{{asset('assets/js/modal-edit-user.js')}}"></script>

<script type="text/javascript">

function selectAncienAo(id){
  console.log(id)
}
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-generate").click(function(e) {
        e.preventDefault();
        //get models id input and ao id input
        let model = $("#models").val();
        let ao = $("#ao").val();
        let diplome_module = $("#diplome_module").val();
        let langue_module = $("#langue_module").val();
        var toFill = [];
        if (model == '') {
            toFill.push('Model');
        }
        if (ao == '') {
            toFill.push('AO');
        }

        if (toFill.length > 0) {
            alert('Please fill the fields : ' + toFill.join(', '));
            return false;
        } else {
            let formData = new FormData();
            let cardsCvs = localStorage.getItem('cardsCvs');
            formData.append('cvs', cardsCvs);
            formData.append('model', model);
            formData.append('langue_module', langue_module);
            formData.append('diplome_module', diplome_module);
            formData.append('ao', ao);
            $.ajax({
                url: baseUrl + "cv/generateCvs",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    var link = document.createElement('a');
                    link.href = data.downloadLink;
                    link.click();
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
    <span class="text-muted fw-light">CVthèque /</span> Generez Cvs
</h4>

<div class="row">
    <div id="wizard-checkout" class="bs-stepper wizard-icons wizard-icons-example mt-2">
        <div class="bs-stepper-content">
            <form id="wizard-checkout-form" class="formGenerate">
                <div class="col-12">
                    <div class="col-12">
                        <h6 class="mt-2 fw-semibold">Personnaliser et Generer</h6>
                        <hr class="mt-0" />
                    </div>
                    <div class="row mb-4">
                        <div id="content-list-cvs" class="row col-9 row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-12 gutters-md">
                            <div class="no-data w-100 text-center">
                                <img src="{{asset('assets/img/nodata.gif')}}" width="200" height="70" class="img-fluid" alt="Responsive image">
                                <h5 class="text-muted fw-light">Aucun Cv selectionné</h5>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row d-flex justify-content-center">
                                <button type="button" class="btn btn-primary mb-2 col-10" data-bs-toggle="modal" data-bs-target="#modalCenter">Sélectionnez Cv </span> <i class="ti ti-plus"></i></button>
                                <button type="button" class="btn btn-warning mb-2 col-10" data-bs-toggle="modal" data-bs-target="#largeModal">CVs Générés Antérieurement </span> <i class="ti ti-file-description"></i></button>
                            </div>
                            <hr class="mt-0" />
                            <h5>Filtres de recherche</h5>
                            <input type="text" id="ao_name" class="form-control mb-4" placeholder="Rechercher" name="Recherche" />
                            <select id="roles" class="form-select mb-4">
                                <option value="">Filtrer par poste</option>
                                <option value="Directeur projets">Directeur projets</option>
                                <option value="Chef projets topographe">Chef projets topographe</option>
                                <option value="Chef projet Hydrographe">Chef projet Hydrographe</option>
                                <option value="Chef projets SIG">Chef projets SIG</option>
                                <option value="Technicien Topographe">Technicien Topographe</option>
                                <option value="Technicien Hydrographe">Technicien Hydrographe</option>
                                <option value="Technicien SIG">Technicien SIG</option>
                            </select>
                            <select id="posts" class="form-select mb-4">
                                <option value="">Filtrer par Departement</option>
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
                            <hr class="mt-0" />
                            <h5>Generer les CVs</h5>
                            <select id="models" class="form-select mb-4" name="model">
                                <option value="">Sélectionnez le modèle du CVs</option>
                                <option value="mondial">MODELE CV BANQUE MONDIALE</option>
                                <option value="africaine">MODELE CV DE BANQUE AFRICAINE</option>
                            </select>
                            <select id="ao" class="form-select  mb-4" name="model">
                                <option value="">Sélectionnez Appel d'Offre</option>
                                @foreach($aos as $ao)
                                <option value="{{$ao->n_ao}}">{{$ao->n_ao}}</option>
                                @endforeach

                            </select>
                            <select id="langue_module" class="form-select  mb-4" name="langue_module">
                                <option value="">Sélectionnez la langue</option>
                                <option value="fr">Francais</option>
                                <option value="an">Anglais</option>
                            </select>
                            <select id="diplome_module" class="form-select  mb-4" name="diplome_module">
                                <option value="">Sélectionnez le Type</option>
                                <option value="avec">Avec Diplômes</option>
                                <option value="sans">Sans Diplômes</option>
                            </select>
                            <button type="submit" class="btn btn-success btn-generate"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Generer le cvs</span> <i class="ti ti-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="col-lg-4 col-md-6">
            <div class="mt-3">
                <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Sélectionnez Cv</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" id="modal-add-cv">
                                <div class="row">
                                    <div class="col mb-3">
                                        <label class="form-label" for="roles">Poste</label>
                                        <select id="roles" class="form-select" name="role-0">
                                            <option value="">Sélectionnez un poste</option>
                                            @foreach($postes as $poste)
                                            <option value="{{$poste->postNom}}">{{$poste->postNom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label class="form-label" for="employees">Employee</label>
                                        <select id="employees" class="form-select select2 form-select form-select-lg" name="employee-0">
                                            <option value="">Sélectionnez un cv</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary btn-add-cv" data-bs-dismiss="modal">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="largeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Sélectionnez les anciens CVs générés par Ao</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        @foreach($generatedAos as $generatedAo)
                        <div class="col-md-6 col-lg-4 mb-3 cursor-pointer card-Ao" id="{{ $generatedAo->id }}">
                            <div class="card h-100">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <h5 class="card-title h6">{{ $generatedAo->ao_nom }}</h5>
                                    <h6 class="card-subtitle text-muted">{{ $generatedAo->modele }}</h6>
                                </div>
                                <hr class="mx-4 my-0" />
                                <div class="card-body d-flex flex-row justify-content-between py-3">
                                    <span class="card-link">{{ ($generatedAo->langue == 'fr') ? 'Francais' : 'Anglais' }}</span>
                                    @php
                                        $fullDate = explode(' ',$generatedAo->created_at);
                                        $date = $fullDate[0];
                                        $time = explode(':' , $fullDate[1]);
                                        $time = $time[0] . ':' . $time[1];
                                    @endphp
                                    <span class="card-link d-flex flex-column align-items-end">
                                        <span>{{ $date }}</span>
                                        <span>{{ $time }}</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


</div>

@include('_partials/_modals/modal-edit-user')


@endsection
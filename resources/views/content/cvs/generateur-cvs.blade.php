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
<script src="{{asset('assets/js/modal-edit-user.js')}}"></script>

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

    $(".btn-generate").click(function(e) {
        e.preventDefault();
        var formData = new FormData($('#wizard-checkout-form')[0]);
        console.log(formData)
        let toFill = [];
        for (const [key, value] of formData.entries()) {
            if (!value) {
                if(key == 'ao_name'){
                    toFill.push('Nom');
                }else if(key == 'marche_nbr'){
                    toFill.push('Numéro de marché');
                }else if(key == 'ao_type'){
                    toFill.push('Type d\'AO');
                }
            }
        }
        if (toFill.length > 0) {
            alert('Please fill the fields : ' + toFill.join(', '));
            return false;
        } else {
            let cardsCvs = localStorage.getItem('cardsCvs');
            console.log(cardsCvs)
            //add cardsCvs to formData
            formData.append('cvs', cardsCvs);
            //remove role-0 and employee-0 from fromData
            for(var i=0; i < cardsCvs.length ; i++){
                formData.delete('role-'+i);
                formData.delete('employee-'+i);
            }
            for(var pair of formData.entries()) {
                console.log(pair[0]+ ', '+ pair[1]); 
            }
            $.ajax({
                url: "/cv/generateCvs",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log("success")
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
    <span class="text-muted fw-light">CVtéque /</span> Generez Cvs
</h4>

<div class="row">
    <div id="wizard-checkout" class="bs-stepper wizard-icons wizard-icons-example mt-2">
        <div class="bs-stepper-header m-auto border-0 py-5">
            <div class="step" data-target="#checkout-cart">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-label">Select AO</span>
                </button>
            </div>
            <div class="line">
                <i class="ti ti-chevron-right"></i>
            </div>
            <div class="step" data-target="#checkout-address">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-label">Select Cvs</span>
                </button>
            </div>
            <div class="line">
                <i class="ti ti-chevron-right"></i>
            </div>
            <div class="step" data-target="#checkout-payment">
                <button type="button" class="step-trigger">
                    <span class="bs-stepper-label">Personnaliser & Générer Cvs</span>
                </button>
            </div>
        </div>
        <div class="bs-stepper-content border-top">
            <form id="wizard-checkout-form" class="formGenerate">
                <!-- @csrf -->
                <!-- Cart -->
                <div id="checkout-cart" class="content">
                    <div class="col-12 row mb-4">

                        <div class="col-12">
                            <h6 class="fw-semibold">1. Informations générales</h6>
                            <hr class="mt-0" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="ao_name">Nom de l'AO</label>
                            <input type="text" id="ao_name" class="form-control" placeholder="Etude topographique région de Souss-Massa" name="ao_name" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="marche_nbr">Marché numéro</label>
                            <input type="text" id="marche_nbr" class="form-control" placeholder="1493/29" name="marche_nbr" />
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="form-repeater-1-4">Type d'Ao</label>
                            <select id="form-repeater-1-4" class="form-select" name="ao_type">
                                <option value="Type1">Type1</option>
                                <option value="Type2">Type2</option>
                                <option value="Type3">Type3</option>
                                <option value="Type4">Type4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                        <button type="button" class="btn btn-label-secondary btn-prev" disabled> <i class="ti ti-arrow-left me-sm-1"></i>
                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                        </button>
                        <button type="button" class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ti ti-arrow-right"></i></button>
                    </div>
                </div>

                <!-- Address -->
                <div id="checkout-address" class="content">
                    <div class="col-12">
                        <div class="col-12">
                            <h6 class="mt-2 fw-semibold">2. Select Cvs</h6>
                            <hr class="mt-0" />
                        </div>
                        <div class="content-wrapper-cursus">
                            <div class="content-cursus">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content-wrapper-cvs">
                                            <div class="content-cvs">
                                                <div class="row">
                                                    <div class="col-lg-6 col-xl-4 col-12 mb-3">
                                                        <label class="form-label" for="roles">Poste</label>
                                                        <select id="roles" class="form-select" name="role-0">
                                                            <option value="Directeur projets">Directeur projets</option>
                                                            <option value="Chef projets topographe">Chef projets topographe</option>
                                                            <option value="Chef projet Hydrographe">Chef projet Hydrographe</option>
                                                            <option value="Chef projets SIG">Chef projets SIG</option>
                                                            <option value="Technicien Topographe">Technicien Topographe</option>
                                                            <option value="Technicien Hydrographe">Technicien Hydrographe</option>
                                                            <option value="Technicien SIG">Technicien SIG</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 col-xl-4 col-12 mb-3">
                                                        <label class="form-label" for="employees">Employee</label>
                                                        <select id="employees" class="form-select" name="employee-0">
                                                            <option value="">Select Employee</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-12 col-xl-2 col-12 d-flex align-items-end mb-3">
                                                        <button class="btn btn-danger btn-remove d-none"><i class="fa fa-trash"></i> Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="actions mb-4">
                                            <button type="button" class="btn btn-primary btn-add"><i class="fa fa-plus"></i> Nouveau Cv</button>
                                        </div>
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
                            <h6 class="mt-2 fw-semibold">3. Personnaliser et Generer</h6>
                            <hr class="mt-0" />
                        </div>
                        <div class="row mb-4">
                            <div id="content-list-cvs" class="row col-9">
                            </div>
                            <div class="col-3">
                                <h5>Filtres de recherche</h5>
                                <input type="text" id="ao_name" class="form-control mb-4" placeholder="Rechercher" name="Recherche" />
                                <select id="roles" class="form-select mb-4">
                                    <option value="">Filter By Poste</option>
                                    <option value="Directeur projets">Directeur projets</option>
                                    <option value="Chef projets topographe">Chef projets topographe</option>
                                    <option value="Chef projet Hydrographe">Chef projet Hydrographe</option>
                                    <option value="Chef projets SIG">Chef projets SIG</option>
                                    <option value="Technicien Topographe">Technicien Topographe</option>
                                    <option value="Technicien Hydrographe">Technicien Hydrographe</option>
                                    <option value="Technicien SIG">Technicien SIG</option>
                                </select>
                                <select id="posts" class="form-select mb-4">
                                    <option value="">Filter By Departement</option>
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
                                <button type="submit" class="btn btn-primary btn-generate mb-4"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Generer</span> <i class="ti ti-arrow-right"></i></button>
                                <select id="models" class="form-select" name="model">
                                    <option value="1">MODELE CV BANQUE MONDIALE</option>
                                    <option value="2">MODELE CV DE BANQUE AFRICAINE</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                            <button type="button" class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1"></i>
                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Confirmation -->
                <div id="checkout-confirmation" class="content">
                    
                </div>
            </form>
        </div>
    </div>


</div>



@include('_partials/_modals/modal-edit-user')


@endsection
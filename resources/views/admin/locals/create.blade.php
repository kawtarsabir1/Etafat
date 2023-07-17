@extends('layouts/contentLayoutMaster')

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/wizard/bs-stepper.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-wizard.css')) }}">
@endsection
@section('content')
    <x-PageHeader :header="\App\Http\Headers\LocalHeader::create()"></x-PageHeader>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('admin.locals.store') }}" enctype="multipart/form-data"
                        id="wizard-form">
                        @csrf

                        <section class="vertical-wizard">
                            <div class="bs-stepper vertical vertical-wizard-example">
                                <div class="bs-stepper-header">


                                    <x-wizard.step title="Données générales" id="step-1"></x-wizard.step>
                                    <x-wizard.step title="Données Techniques" id="step-2"></x-wizard.step>
                                    <x-wizard.step title="Localisation" id="step-3"></x-wizard.step>


                                </div>
                                <div class="bs-stepper-content">
                                    <x-wizard.step-content title="Informations" id="step-1" type="start" step="1">

  
                                        
                                        <div class="row">
                                            <x-forms.input name="code" label="models.local.fields.code"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="denomination" label="models.local.fields.denomination"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="adresse" label="models.local.fields.adresse"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.select :select2="false" :options="\App\Models\Site::TYPE_DETENTION" name="type_detention"
                                                label="models.site.fields.type_detention" :required="false">
                                            </x-forms.select>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="proprietaire" label="models.local.fields.proprietaire"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="bailleur" label="models.local.fields.bailleur"
                                                :required="false">
                                            </x-forms.input>
                                        </div>    
                                        
                                    </x-wizard.step-content>


                                    <x-wizard.step-content title="Données Techniques" id="step-2" type="middle"
                                        step="1">

                                        <div class="row">
                                            <x-forms.input name="superficie" label="models.local.fields.superficie"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="type_activite" label="models.local.fields.type_activite"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="type" label="models.local.fields.type"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="nom_espace" label="models.local.fields.nom_espace"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="code_espace" label="models.local.fields.code_espace"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="superficie_espace" label="models.local.fields.superficie_espace"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
 

                                    </x-wizard.step-content>




                                    <x-wizard.step-content title="Localisation" id="step-3" type="end" step="3">
                                        <div class="row">
                                            <x-forms.select :options="\App\Models\Site::pluck('denomination', 'id')" name="site_id"
                                                label="models.site.fields.site_id" :required="true"
                                                :select2="true">
                                            </x-forms.select>
                                        </div>
                                        <div class="row">
                                            <x-forms.select :options="\App\Models\Etage::pluck('niveau', 'id')" name="etage_id"
                                                label="models.site.fields.etage_id" :required="false"
                                                :select2="true">
                                            </x-forms.select>
                                        </div>
                                    </x-wizard.step-content>

                                </div>
                            </div>
                        </section>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('vendor-script')
    <!-- vendor files -->
    <script src="{{ asset(mix('vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>

    <script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/ar.js"></script>
@endsection
@section('script')
    <script> 
        verticalWizard = document.querySelector('.vertical-wizard-example');
        var verticalStepper = new Stepper(verticalWizard, {
            linear: false
        }); 
        $(verticalWizard)
            .find('.btn-next')
            .on('click', function() {
                verticalStepper.next();
            });
        $(verticalWizard)
            .find('.btn-prev')
            .on('click', function() {
                verticalStepper.previous();
            });

        $(verticalWizard)
            .find('.btn-submit')
            .on('click', function() {
                alert('Submitted..!!');
            });
    </script>
@endsection

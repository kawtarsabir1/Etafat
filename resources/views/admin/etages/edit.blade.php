@extends('layouts/contentLayoutMaster')

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{asset('vuexy/vendor/libs/bs-stepper/bs-stepper.css')}}" />
@endsection

@section('style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-wizard.css')) }}">
@endsection
@section('content')
    <x-PageHeader :header="\App\Http\Headers\EtageHeader::edit($etage)"></x-PageHeader>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('admin.etages.update',[$etage->id]) }}" enctype="multipart/form-data"
                        id="wizard-form">
                        @csrf
                        @method("PUT")

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
                                            <x-forms.select :options="\App\Models\Etage::NIVEAU" name="niveau" :value="$etage->niveau" label="models.etage.fields.niveau" :required="false">
                                            </x-forms.select>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="code" :value="$etage->code" label="models.batiment.fields.code"
                                                :required="false">
                                            </x-forms.input>
                                        </div> 
                                        <div class="row">
                                            <x-forms.input name="adresse" :value="$etage->adresse" label="models.batiment.fields.adresse"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="type_detention" :value="$etage->type_detention" label="models.batiment.fields.type_detention"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="proprietaire" :value="$etage->proprietaire" label="models.batiment.fields.proprietaire"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="bailleur" :value="$etage->bailleur" label="models.batiment.fields.bailleur"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="taxe" :value="$etage->taxe" label="models.batiment.fields.taxe"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                         
                                    </x-wizard.step-content>

                                    
                                    <x-wizard.step-content title="Données Techniques" id="step-2" type="middle"
                                        step="2">

                                        <div class="row">
                                            <x-forms.input name="superficie" :value="$etage->superficie" label="models.batiment.fields.superficie_plancher"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="sub" :value="$etage->sub" label="models.batiment.fields.sub"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="sun" :value="$etage->sun" label="models.batiment.fields.sun"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="shob" :value="$etage->shob" label="models.batiment.fields.shob"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="shon" :value="$etage->shon" label="models.batiment.fields.shon"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="hauteur" :value="$etage->hauteur" label="models.batiment.fields.hauteur"
                                                :required="false">
                                            </x-forms.input>
                                        </div> 

                                    </x-wizard.step-content>

                                    <x-wizard.step-content title="Localisation" id="step-3" type="end" step="3">
                                        <div class="row">
                                            <x-forms.select :options="\App\Models\Site::pluck('denomination', 'id')" name="site_id" :value="$etage->site_id"
                                                label="models.site.fields.site_id" :required="true"
                                                :select2="true">
                                            </x-forms.select>
                                        </div>
                                        <div class="row">
                                            <x-forms.select :options="\App\Models\Batiment::pluck('titre_foncier', 'id')" name="batiment_id" :value="$etage->batiment_id"
                                                label="models.site.fields.batiment_id" :required="false"
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

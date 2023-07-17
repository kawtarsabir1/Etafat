

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
    <x-PageHeader :header="\App\Http\Headers\TerrainHeader::create()"></x-PageHeader>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route("admin.terrains.update", [$terrain->id]) }}" enctype="multipart/form-data"
                        id="wizard-form">
                        @csrf
                        @method("PUT")

                        <section class="vertical-wizard">
                            <div class="bs-stepper vertical vertical-wizard-example">
                                <div class="bs-stepper-header">

                                    <x-wizard.step title="Informations" id="step-1"></x-wizard.step>
                                    <x-wizard.step title="Superficies" id="step-2"></x-wizard.step>
                                </div>
                                <div class="bs-stepper-content">
                                    <x-wizard.step-content title="Informations" id="step-1" type="start" step="1">

                                        <div class="row">
                                            <x-forms.input name="nom" label="models.terrain.fields.nom" :value="$terrain->nom" :required="true">
                                            </x-forms.input>
                                        </div>

                                        <div class="row">
                                            <x-forms.input name="code" :value="$terrain->code" label="models.terrain.fields.code" :required="true">
                                            </x-forms.input>
                                        </div>

                                        
                                        <div class="row">
                                            <x-forms.input name="adresse" :value="$terrain->adresse" label="models.terrain.fields.adresse" :required="true">
                                            </x-forms.input>
                                        </div>

                                        <div class="row">
                                            <x-forms.input name="titre_foncier" label="models.terrain.fields.titre_foncier" :value="$terrain->titre_foncier"
                                                :required="false">
                                            </x-forms.input>
                                        </div>

                                        <div class="row">
                                            <x-forms.input name="requisition" label="models.terrain.fields.requisition" :value="$terrain->requisition"
                                                :required="false">
                                            </x-forms.input>
                                        </div>

                                        <div class="row">
                                            <x-forms.input name="propretaire" label="models.terrain.fields.propretaire" :value="$terrain->propretaire"
                                                :required="false">
                                            </x-forms.input>
                                        </div>

                                        <div class="row">
                                            <x-forms.input name="prix_acquisition" label="models.terrain.fields.prix_acquisition" :value="$terrain->prix_acquisition"
                                                :required="false">
                                            </x-forms.input>
                                        </div>

                                        <div class="row">
                                            <x-forms.input name="statut_foncier" label="models.terrain.fields.statut_foncier" :value="$terrain->statut_foncier"
                                                :required="false">
                                            </x-forms.input>
                                        </div>

                                        <div class="row">
                                            <x-forms.select :select2="true" :options="\App\Models\Terrain::TYPE_DETENTION" name="type_detention"
                                                label="models.terrain.fields.type_detention" :value="$terrain->type_detention" :required="false">
                                            </x-forms.select>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="agence" label="models.terrain.fields.agence" :value="$terrain->agence"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.select :select2="true" :options="\App\Models\Terrain::TYPE_TERRAIN" name="type_terrain"
                                                label="models.terrain.fields.type_terrain" :value="$terrain->type_terrain" :required="false">
                                            </x-forms.select>
                                        </div>
                                        <div class="row">
                                            <x-forms.select :select2="true" :options="\App\Models\Site::pluck('denomination','id')" name="site_id"
                                                label="models.terrain.fields.site_id" :value="$terrain->site_id" :required="true">
                                            </x-forms.select>
                                        </div>

                                    </x-wizard.step-content>

                                    <x-wizard.step-content title="Superficies" id="step-2" type="end" step="2">
                                        <div class="row">
                                            <x-forms.input name="superficie" label="models.terrain.fields.superficie" :value="$terrain->superficie" type="number"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="superficie_batie" label="models.terrain.fields.superficie_batie" :value="$terrain->superficie_bati" type="number"
                                                :required="false">
                                            </x-forms.input>
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
    <script src="{{ asset('vuexy/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>

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

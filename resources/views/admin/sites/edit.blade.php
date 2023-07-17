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
    <x-PageHeader :header="\App\Http\Headers\SiteHeader::create()"></x-PageHeader>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route("admin.sites.update", [$site->id]) }}" enctype="multipart/form-data"
                        id="wizard-form">
                        @csrf
                        @method('PUT')

                        <section class="vertical-wizard">
                            <div class="bs-stepper vertical vertical-wizard-example">
                                <div class="bs-stepper-header">
                                    <x-wizard.step title="Informations" id="step-1"></x-wizard.step>
                                    <x-wizard.step title="Localisation" id="step-2"></x-wizard.step>
                                    <x-wizard.step title="Superficies" id="step-3"></x-wizard.step>
                                    <x-wizard.step title="Carte" id="step-4"></x-wizard.step>
                                </div>
                                <div class="bs-stepper-content">
                                    <x-wizard.step-content title="Informations" id="step-1" type="start" step="1">

                                        <x-forms.select :select2="false" :options="['oui' => "Oui", 'non' => "Non"]" :value="$site->provisoir" name="provisoir"
                                            label="models.site.fields.provisoir" :required="false">
                                        </x-forms.select>

                                        <div class="row">
                                            <x-forms.input name="code" label="models.site.fields.code" :value="$site->code" :required="true">
                                            </x-forms.input>
                                        </div>


                                        <div class="row">
                                            <x-forms.input name="code_patrimoine" label="models.site.fields.code_patrimoine" :value="$site->code_patrimoine"
                                                :required="true">
                                            </x-forms.input>
                                        </div>

                                        <div class="row">
                                            <x-forms.input name="n_convention" label="models.site.fields.n_convention" :value="$site->n_convention"
                                                :required="false">
                                            </x-forms.input>
                                        </div>

                                        <div class="row">
                                            <x-forms.input name="denomination" label="models.site.fields.denomination" :value="$site->denomination"
                                                :required="true">
                                            </x-forms.input>
                                        </div>

                                        <div class="row">
                                            <x-forms.input name="adresse" label="models.site.fields.adresse" :value="$site->adresse"
                                                :required="true">
                                            </x-forms.input>
                                        </div>

                                        <div class="row">
                                            <x-forms.input name="superficie" label="models.site.fields.superficie" :value="$site->superficie" type="number"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
 

                                        <div class="row">
                                            <x-forms.input :value="$site->proprietaire" name="proprietaire" label="models.site.fields.proprietaire"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input :value="$site->bailleur" name="bailleur" label="models.site.fields.bailleur"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.yesno :value="$site->monument_historique" name="monument_historique"
                                                label="models.site.fields.monument_historique" :required="false">
                                            </x-forms.yesno>
                                        </div>
                                        <div class="row">
                                            <x-forms.select :value="$site->categorie_batiment" name="categorie_batiment"
                                                label="models.site.fields.categorie_batiment" :required="false"
                                                :options="\App\Models\Site::CATEGORIE_BATIMENT">
                                            </x-forms.select>
                                        </div>

                                        <div class="row">
                                            <x-forms.select :select2="true" :options="\App\Models\Site::TYPE_DETENTION" :value="$site->type_detention" name="type_detention"
                                                label="models.site.fields.type_detention" :required="false">
                                            </x-forms.select>
                                        </div>

                                        <div class="row">
                                            <x-forms.select :select2="true" :options="\App\Models\Site::CARNET_SANTE" :value="$site->carnet_sante" name="carnet_sante"
                                                label="models.site.fields.carnet_sante" :required="false">
                                            </x-forms.select>
                                        </div>



                                    </x-wizard.step-content>

                                    <x-wizard.step-content title="Localisation" id="step-2" type="middle" step="2">
                                        <div class="row">
                                            <x-forms.select :options="\App\Models\RegionBam::pluck('nom', 'id')" name="region_bam_id"
                                                label="models.site.fields.region_bam_id" :value="$site->region_bam_id" :required="true"
                                                :select2="true">
                                            </x-forms.select>
                                        </div>
                                        <div class="row">
                                            <x-forms.select :options="\App\Models\RegionPostale::pluck('nom', 'id')" name="region_postale_id"
                                                label="models.site.fields.region_postale_id" :value="$site->region_postale_id" :required="true"
                                                :select2="true">
                                            </x-forms.select>
                                        </div>
                                    </x-wizard.step-content>

                                                                        <x-wizard.step-content title="Superficies" id="step-3" type="middle"
                                        step="3">
                                        <div class="row">
                                            <x-forms.input name="superficie_total" :value="$site->superficie_total"
                                                label="models.site.fields.superficie_total" type="number"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="superficie_batie" :value="$site->superficie_batie"
                                                label="models.site.fields.superficie_batie" type="number"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="superficieçplancher" :value="$site->superficieçplancher"
                                                label="models.site.fields.superficieçplancher" type="number"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="superficie_terrain" :value="$site->superficie_terrain"
                                                label="models.site.fields.superficie_terrain" type="number"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="sub" :value="$site->sub" label="models.site.fields.sub" type="number"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="sun" :value="$site->sun" label="models.site.fields.sun" type="number"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="shob" :value="$site->shob" label="models.site.fields.shob" type="number"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="shon" :value="$site->shon" label="models.site.fields.shon" type="number"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="superficie_louee" :value="$site->superficie_louee"
                                                label="models.site.fields.superficie_louee" type="number"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="hauteur" :value="$site->hauteur" label="models.site.fields.hauteur"
                                                type="number" :required="false">
                                            </x-forms.input>
                                        </div> 

                                    </x-wizard.step-content>


                                    <x-wizard.step-content title="Carte" id="step-4" type="end" step="4">
                        
                                        <x-map.create type="Point" :wkt="$site->wkt" ></x-map.create>
                                        <input type="hidden" id="shape_text" name="geom" />
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
        var mapShown = false;
        verticalWizard = document.querySelector('.vertical-wizard-example');
        var verticalStepper = new Stepper(verticalWizard, {
            linear: false
        });
        verticalWizard.addEventListener('shown.bs-stepper', function(event) {
            if (event.detail.indexStep == 3 && !mapShown) {
                initMap();
                mapShown = true;
            }
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

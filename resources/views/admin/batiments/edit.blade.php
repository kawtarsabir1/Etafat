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
    <x-PageHeader :header="\App\Http\Headers\BatimentHeader::edit($batiment)"></x-PageHeader>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('admin.batiments.update',[$batiment->id]) }}" enctype="multipart/form-data"
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

                                                                        <x-wizard.step-content title="Données générales" id="step-1" type="start"
                                        step="1">

                                        <div class="row">
                                            <x-forms.input name="code" :value="$batiment->code" label="models.batiment.fields.code"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="denomination" :value="$batiment->denomination" label="models.batiment.fields.denomination"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="adresse" :value="$batiment->adresse" label="models.batiment.fields.adresse"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.select :select2="false" :options="\App\Models\Site::TYPE_DETENTION" name="type_detention" :value="$batiment->type_detention"
                                                label="models.site.fields.type_detention" :required="false">
                                            </x-forms.select>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="proprietaire" :value="$batiment->proprietaire" label="models.batiment.fields.proprietaire"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="bailleur" :value="$batiment->bailleur" label="models.batiment.fields.bailleur"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.yesno name="monument_historique" :value="$batiment->monument_historique" label="models.batiment.fields.monument_historique"
                                                :required="false">
                                            </x-forms.yesno>
                                        </div>
                                        <div class="row">
                                            <x-forms.select name="categorie_batiment" :value="$batiment->categorie_batiment"
                                                label="models.site.fields.categorie_batiment" :required="false"
                                                :options="\App\Models\Site::CATEGORIE_BATIMENT">
                                            </x-forms.select>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="type_construction" :value="$batiment->type_construction" label="models.batiment.fields.type_construction"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="statut_juridique" :value="$batiment->statut_juridique" label="models.batiment.fields.statut_juridique"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="statut_propriete" :value="$batiment->statut_propriete" label="models.batiment.fields.statut_propriete"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="taxe" :value="$batiment->taxe" label="models.batiment.fields.taxe"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
 
                                        <div class="row">
                                            <x-forms.select :options="\App\Models\Batiment::CARNET_SANTE" name="carnet_sante" :value="$batiment->carnet_sante"
                                                label="models.batiment.fields.carnet_sante" :required="false">
                                            </x-forms.select>
                                        </div>
                                        
                                    </x-wizard.step-content>

                                    <x-wizard.step-content title="Données Techniques" id="step-2" type="middle"
                                        step="1">

                                        <div class="row">
                                            <x-forms.input name="niveaux_autorise" :value="$batiment->niveaux_autorise" label="models.batiment.fields.niveaux_autorise"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="niveaux_construit" :value="$batiment->niveaux_construit" label="models.batiment.fields.niveaux_construit"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="niveaux_dessus_sol" :value="$batiment->niveaux_dessus_sol" label="models.batiment.fields.niveaux_dessus_sol"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="niveaux_dessous_sol" :value="$batiment->niveaux_dessous_sol" label="models.batiment.fields.niveaux_dessous_sol"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="date_service" :value="$batiment->date_service" label="models.batiment.fields.date_service"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="nombre_accees" :value="$batiment->nombre_accees" label="models.batiment.fields.nombre_accees"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="etat_accessibilite" :value="$batiment->etat_accessibilite" label="models.batiment.fields.etat_accessibilite"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="superficie_plancher" :value="$batiment->superficie_plancher" label="models.batiment.fields.superficie_plancher"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="superficie_terrain" :value="$batiment->superficie_terrain" label="models.batiment.fields.superficie_terrain"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="sub" :value="$batiment->sub" label="models.batiment.fields.sub"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="sun" :value="$batiment->sun" label="models.batiment.fields.sun"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="shob" :value="$batiment->shob" label="models.batiment.fields.shob"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="shon" :value="$batiment->shon" label="models.batiment.fields.shon"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="superficie_louee" :value="$batiment->superficie_louee" label="models.batiment.fields.superficie_louee"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="hauteur" :value="$batiment->hauteur" label="models.batiment.fields.hauteur"
                                                :required="false">
                                            </x-forms.input>
                                        </div> 

                                    </x-wizard.step-content>


                                    <x-wizard.step-content title="Localisation" id="step-3" type="end" step="3">
                                        <div class="row">
                                            <x-forms.select :options="\App\Models\Site::pluck('denomination', 'id')" name="site_id" :value="$batiment->site_id"
                                                label="models.site.fields.site_id" :required="false"
                                                :select2="true">
                                            </x-forms.select>
                                        </div>
                                        <div class="row">
                                            <x-forms.select :options="\App\Models\Terrain::pluck('nom', 'id')" name="terrain_id" :value="$batiment->terrain_id"
                                                label="models.site.fields.terrain_id" :required="false"
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

@extends('layouts/layoutMaster')

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('assets/vendors/css/forms/wizard/bs-stepper.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('assets/vendors/css/forms/select/select2.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('assets/vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset(mix('assets/css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('assets/css/base/plugins/forms/form-wizard.css')) }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.css"
        integrity="sha512-+VDbDxc9zesADd49pfvz7CgsOl2xREI/7gnzcdyA9XjuTxLXrdpuz21VVIqc5HPfZji2CypSbxx1lgD7BgBK5g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <x-PageHeader :header="\App\Http\Headers\UserHeader::create()"></x-PageHeader>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('user-store') }}" enctype="multipart/form-data"
                        id="wizard-form">
                        @csrf
                        <h5>Informations</h5>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="name">Nom Complet :</label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="Entrer le nom" />
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="email">Email Address :</label>
                                <input class="form-control" type="text" id="email" name="email" placeholder="Entrer l'email Address" />
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="tel">Numéro de Téléphone :</label>
                                <input class="form-control" type="text" id="tel" name="tel" placeholder="Entrer le Numéro de Téléphone" />
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="password">Mot de passe :</label>
                                <input class="form-control" type="text" id="password" name="password" placeholder="Entrer le mot de passe" />
                            </div>
                        </div>
                        <hr>
                        <h5>Photo de profile :</h5>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="avatar">Avatar :</label>
                                <input class="form-control" type="file" id="avatar" name="avatar" placeholder="email" />
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-outline-secondary">
                                <i class="bx bx-chevron-left"></i>Annuler
                            </button>
                            <button type="submit" class="btn btn-primary btn-next">Créer
                                <i class="bx bx-chevron-right"></i>
                            </button>
                        </div>
                        

                        <!-- <section class="vertical-wizard">
                            <div class="bs-stepper vertical vertical-wizard-example">
                                <div class="bs-stepper-header">

                                    <x-wizard.step title="Informations" id="step-1"></x-wizard.step>
                                    <x-wizard.step title="Photo de profile" id="step-2"></x-wizard.step>
                                </div>
                                <div class="bs-stepper-content">
                                    <x-wizard.step-content title="Informations" id="step-1" type="start">


                                        <div class="row">
                                            <x-forms.input name="name" label="models.user.fields.name" :required="true">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="email" label="models.user.fields.email"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="tel" label="Numéro de Téléphone"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        
                                        <div class="row">
                                            <x-forms.input name="password" type="password"  label="models.user.fields.password"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                    
                                          
                                        <div class="row">
                                            <x-forms.select :options="\App\Models\RegionBam::pluck('nom', 'id')" name="regions" :value="old('regions', [])"
                                                label="models.user.fields.regions" :required="false" :select2="true" :multiple="true">
                                            </x-forms.select>
                                        </div>
                                        <div class="row">
                                            <x-forms.select :options="\App\Models\Site::pluck('denomination', 'id')" name="site" :value="old('site', [])"
                                                label="Site" :required="false" :select2="true" :multiple="true">
                                            </x-forms.select>
                                        </div>
                                        <div class="row">

                                            <x-forms.select name="roles" :label="trans('models.user.fields.roles')" :required="true"
                                                select2="true" :options="$roles" :multiple="true" :value="old('roles', [])"
                                                :help="trans('models.user.fields.roles_helper')">
                                            </x-forms.select>
                                        </div>
                                    </x-wizard.step-content>


                                    <x-wizard.step-content title="Photo de profile" id="step-2" type="end">
                                        <label for="input" class="image-previewer" data-cropzee="input"></label><br>
                                        <input id="input" type="file" accept="image/*">
                                        <img id="img" width="100%" />

                                        <input type="hidden" id="avatar" name="avatar">
                                    </x-wizard.step-content>

                                </div>
                            </div>
                        </section> -->

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('vendor-script')
    <!-- vendor files -->
    <script src="{{ asset(mix('assets/vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>
    <script src="{{ asset(mix('assets/vendors/js/forms/select/select2.full.min.js')) }}"></script>
    <script src="{{ asset(mix('assets/vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>

    <script src="{{ asset(mix('assets/vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/ar.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/BossBele/cropzee@latest/dist/cropzee.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.js"
        integrity="sha512-ZK6m9vADamSl5fxBPtXw6ho6A4TuX89HUbcfvxa2v2NYNT/7l8yFGJ3JlXyMN4hlNbz0il4k6DvqbIW5CCwqkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@section('script')
    <!-- Page js files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="{{ asset('js/dropzone.js') }}"></script>
    <script>
        $(".flatpickr-basic").flatpickr({
            dateFormat: "d-m-Y",
            "locale": "fr"
        });

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

        $("#is_controlleur").on("change", checkControlleur);
        $("#is_enqueteur").on("change", checkEnqueteur);


        checkControlleur();
        checkEnqueteur();

        function checkControlleur() {
            if ($('#is_controlleur').is(":checked")) {
                $('#is_controlleur').val(1);
            } else {
                $('#is_controlleur').val(0);
            }
        }

        function checkEnqueteur() {
            if ($('#is_enqueteur').is(":checked")) {
                $('#is_enqueteur').val(1);
                $("#prestataire_id").parent().show();
            } else {
                $('#is_enqueteur').val(0);
                $("#prestataire_id").parent().hide();
            }
        }

        document.getElementById('input').addEventListener('change', readURL, true);
        let cropper = null;

        function readURL() {
            var file = document.getElementById("input").files[0];
            var reader = new FileReader();
            reader.onloadend = function() {
                if (cropper) {
                    cropper.destroy();
                }
                imgDom = document.getElementById('img');
                imgDom.src = reader.result;
                cropper = new Cropper(imgDom, {
                    aspectRatio: 1,
                    crop(event) {
                        document.getElementById("avatar").value = this.cropper
                            .getCroppedCanvas( /* any options you want */ ).toDataURL();
                    },
                });
            }
            if (file) {
                reader.readAsDataURL(file);
            } else {}
        }
    </script>
@endsection

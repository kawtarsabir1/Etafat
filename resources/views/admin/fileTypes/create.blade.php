
@extends('layouts/contentLayoutMaster')

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/wizard/bs-stepper.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/jstree.min.css')) }}">
@endsection

@section('style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-wizard.css')) }}">
@endsection
@section('content')
    <x-PageHeader :header="\App\Http\Headers\FileTypeHeader::create()"></x-PageHeader>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('admin.file-types.store') }}" enctype="multipart/form-data"
                        id="wizard-form">
                        @csrf

                        <section class="vertical-wizard">
                            <div class="bs-stepper vertical vertical-wizard-example">
                                <div class="bs-stepper-header">
                                    <x-wizard.step title="Informations" id="step-1" type="end"></x-wizard.step>
                                </div>
                                <div class="bs-stepper-content">
                                    <x-wizard.step-content title="Informations" id="step-1" type="end">

                                        <div class="row">
                                            <x-forms.input name="name" label="models.fileType.fields.name"
                                                :required="true">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.textarea name="description" label="models.fileType.fields.description"
                                                :required="false">
                                            </x-forms.textarea>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="nomenclature" label="models.fileType.fields.nomenclature"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="parent_id" label="models.fileType.fields.parent_id"
                                                :required="false">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.select name="module" label="models.fileType.fields.module"
                                                :required="false" :options="Modules\Processus\Entities\Theme\Theme::MODELS">
                                            </x-forms.select>
                                        </div>
                                       <div class="row">
                                            <x-forms.select name="theme_id" label="models.fileType.fields.theme_id"
                                                :required="false" :options="Modules\Processus\Entities\Theme\Theme::pluck('nom','id')">
                                            </x-forms.select>
                                        </div>
                                        <div class="row">
                                            <x-forms.select name="filetypes" label="models.fileType.fields.filetypes"
                                                :required="false"  :options="App\Models\FileType::TYPES" value="*">
                                            </x-forms.select>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="maxfiles" label="models.fileType.fields.maxfiles"
                                                :required="true" :value="1">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.input name="maxsize" label="models.fileType.fields.maxsize"
                                                :required="true" :value="20">
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
    <script src="{{ asset(mix('vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
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

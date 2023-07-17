@extends('layouts/contentLayoutMaster')

@section('vendor-style')
    <!-- vendor css files -->
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/wizard/bs-stepper.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection

@section('style')
    <!-- Page css files -->
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-wizard.css')) }}">
@endsection
@section('content')
    <x-PageHeader :header="\App\Http\Headers\RoleHeader::edit($role)"></x-PageHeader>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <form method="POST" id="wizard-form" action="{{ route('admin.roles.update', [$role->id]) }}"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <section class="vertical-wizard">
                            <div class="bs-stepper vertical vertical-wizard-example">
                                <div class="bs-stepper-header">

                                    <x-wizard.step title="Informations" id="step-1"></x-wizard.step>
                                    <x-wizard.step title="Permission" id="step-2"></x-wizard.step>
                                    <x-wizard.step title="Notifications" id="step-3"></x-wizard.step>

                                </div>
                                <div class="bs-stepper-content">
                                    <x-wizard.step-content title="Informations" id="step-1" type="start">


                                        <div class="row">
                                            <x-forms.input name="title" label="models.role.fields.title" :required="true"
                                                :value="$role->title">
                                            </x-forms.input>
                                        </div>
                                        <div class="row">
                                            <x-forms.textarea name="description" label="models.role.fields.description"
                                                :required="false" :value="$role->description">
                                            </x-forms.textarea>
                                        </div>
                                    </x-wizard.step-content>


                                    <x-wizard.step-content title="Permissions" id="step-2" type="middle">
                                        <x-forms.tree :nodes="$permissions" :disabled="false"></x-forms.tree>
                                    </x-wizard.step-content>

                                    <x-wizard.step-content title="Notifications" id="step-3" type="end">
                                        <div class="row">
                                            <x-forms.select name="notifications" :label="trans('models.notifications.title')" :required="false"
                                                select2="true" :options="\App\Models\RoleNotification::pluck('title','id')" :multiple="true" :value="$role->notifications->pluck('id')">
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

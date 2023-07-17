@extends('layouts/contentLayoutMaster')

@section('vendor-style')
@endsection


@section('content')
    <x-PageHeader :header="\App\Http\Headers\RoleHeader::show($role)"></x-PageHeader>

    <div class="row">

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <x-Presentation.dataCard :items="[
                        'models.role.fields.id' => $role->id,
                        'models.role.fields.title' => $role->title,
                        'models.role.fields.description' => $role->description,
                    ]" title="informations"></x-Presentation.dataCard>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" aria-controls="home" role="tab" aria-selected="true">Permission</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" aria-controls="profile" role="tab" aria-selected="false">Notifications</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" aria-labelledby="home-tab" role="tabpanel">
                            <x-forms.tree :nodes="$permissions" :disabled="true"></x-forms.tree>
                        </div>
                        <div class="tab-pane" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                            <ul>
                            @foreach($role->notifications as $n)
                                <li>{{trans('notifications.'.$n->title)}}</li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                    </div>

 
            </div>
        </div>




    </div>


@endsection

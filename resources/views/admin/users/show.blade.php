@extends('layouts/contentLayoutMaster')

@section('vendor-style')
@endsection


@section('content')
    <x-PageHeader :header="\App\Http\Headers\UserHeader::show($user)"></x-PageHeader>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Photo de profile</h4>
                    <img width="100%"
                        src="@if (!empty($user->avatar)) {{ $user->avatar }} @else {{ asset('images/avatar.png') }} @endif"
                        alt="" class="avatar brround bg-warning" width="60px">
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="#profile"
                                aria-controls="profile" role="tab" aria-selected="true"><i data-feather='user'></i>
                                Informations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="securite-tab" data-bs-toggle="tab" href="#securite"
                                aria-controls="securite" role="tab" aria-selected="false"><i data-feather='lock'></i>
                                Sécurité</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="session-tab" data-bs-toggle="tab" href="#session"
                                aria-controls="session" role="tab" aria-selected="false"><i
                                    data-feather='book'></i>Sessions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="connection-tab" data-bs-toggle="tab" href="#connection"
                                aria-controls="connection" role="tab" aria-selected="false"><i
                                    data-feather='link'></i>Connections</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                            <x-Presentation.dataCard :items="[
                                'models.user.fields.id' => $user->id,
                                'models.user.fields.name' => $user->name,
                                'models.user.fields.email' => $user->email,
                                'models.user.fields.tel' => $user->tel,
                                'models.user.fields.regions' => ['type'=> 'chips' , 'data' => $user->regions->pluck('nom', 'id')->toArray()],
                                'models.user.fields.sites' => ['type'=> 'chips' , 'data' => $user->sites->pluck('denomination', 'id')->toArray()],
                                'models.user.fields.roles' => ['type'=> 'chips' , 'data' => $user->roles->pluck('title', 'id')->toArray()],
                            ]"></x-Presentation.dataCard>
                        </div>
                        <div class="tab-pane" id="session" aria-labelledby="session-tab" role="tabpanel">
                            @foreach ($user->sessions as $session)
                                <div class="d-flex mt-2">
                                    <div class="flex-shrink-0">
                                        @if ($session->agent->isMobile())
                                            <img src="{{ asset('images/mobile.png') }}" alt="google" class="me-1"
                                                height="38" width="38">
                                        @elseif($session->agent->isTablet())
                                            <img src="{{ asset('images/tablet.png') }}" alt="google" class="me-1"
                                                height="38" width="38">
                                        @elseif($session->agent->isDesktop())
                                            <img src="{{ asset('images/desktop.png') }}" alt="google" class="me-1"
                                                height="38" width="38">
                                        @elseif($session->agent->isPhone())
                                            <img src="{{ asset('images/mobile.png') }}" alt="google" class="me-1"
                                                height="38" width="38">
                                        @endif



                                    </div>
                                    <div class="d-flex align-item-center justify-content-between flex-grow-1">
                                        <div class="me-1">
                                            <p class="fw-bolder mb-0">{{ $session->ip_address }}</p>
                                            <span>{{ $session->agent->platform() }} /
                                                {{ $session->agent->browser() }}</span><br>
                                            <span>Dernière activité : {{ $session->last_activite }}</span>
                                        </div>
                                        <div class="mt-50 mt-sm-0">
                                            <a type="button" class="btn btn-icon btn-flat-danger waves-effect"
                                                href="{{ url('admin/users/removesession/' . $session->id) }}">
                                                <i data-feather='trash-2'></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="tab-pane" id="securite" aria-labelledby="securite-tab" role="tabpanel">

                            <form class="validate-form" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="account-old-password">Current password</label>
                                        <div class="input-group form-password-toggle input-group-merge">
                                            <input type="password" class="form-control" id="account-old-password"
                                                name="password" placeholder="Enter current password"
                                                data-msg="Please current password">
                                            <div class="input-group-text cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="account-new-password">New Password</label>
                                        <div class="input-group form-password-toggle input-group-merge">
                                            <input type="password" id="account-new-password" name="new-password"
                                                class="form-control" placeholder="Enter new password">
                                            <div class="input-group-text cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-1">
                                        <label class="form-label" for="account-retype-new-password">Retype New
                                            Password</label>
                                        <div class="input-group form-password-toggle input-group-merge">
                                            <input type="password" class="form-control" id="account-retype-new-password"
                                                name="confirm-new-password" placeholder="Confirm your new password">
                                            <div class="input-group-text cursor-pointer"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="fw-bolder">Password requirements:</p>
                                        <ul class="ps-1 ms-25">
                                            <li class="mb-50">Minimum 8 characters long - the more, the better</li>
                                            <li class="mb-50">At least one lowercase character</li>
                                            <li>At least one number, symbol, or whitespace character</li>
                                        </ul>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-primary me-1 mt-1 waves-effect waves-float waves-light">Save
                                            changes</button>
                                        <button type="reset"
                                            class="btn btn-outline-secondary mt-1 waves-effect">Discard</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="tab-pane" id="connection" aria-labelledby="connection-tab" role="tabpanel">

                            <div class="d-flex mt-2">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('images/ldap-logo.png') }}" alt="facebook" class="me-1"
                                        height="38" width="38">
                                </div>
                                <div class="d-flex justify-content-between flex-grow-1">
                                    <div class="me-1">
                                        <p class="fw-bolder mb-0">LDAP</p>
                                        <span>Not Connected</span>
                                    </div>
                                    <div class="mt-50 mt-sm-0">
                                        <button type="button" class="btn btn-icon btn-outline-secondary waves-effect">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-link font-medium-3">
                                                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71">
                                                </path>
                                                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>


    </div>
@endsection

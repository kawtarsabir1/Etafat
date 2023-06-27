@extends('layouts/layoutMaster')

@section('title', 'View - AO')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/app-invoice.css')}}" />
@endsection

@section('page-script')
<script src="{{asset('assets/js/offcanvas-add-payment.js')}}"></script>
<script src="{{asset('assets/js/offcanvas-send-invoice.js')}}"></script>
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
@endsection

@section('content')

<div class="row invoice-preview">
    <!-- Invoice -->
    <div class="col-xl-9 col-md-8 col-12 mb-md-0 mb-4">
        <div class="card invoice-preview-card">
            <div class="card-body">
                <div class="d-flex justify-content-between flex-xl-row flex-md-column flex-sm-row flex-column m-sm-3 m-0">
                    <div class="mb-xl-0 mb-4">
                        <h5>Objet :</h5>
                        <p class="mb-2">
                            @php
                            $originalString = $ao->objet_ao;
                            $words = explode(' ', $originalString);

                            $parts = [];
                            $currentPart = '';

                            foreach ($words as $word) {
                            if (strlen($currentPart . $word) <= 40) { $currentPart .=$word . ' ' ; } else { $parts[]=trim($currentPart); $currentPart=$word . ' ' ; } } $parts[]=trim($currentPart); $result=implode('<br>', $parts);

                                echo $result;
                                @endphp
                        </p>
                    </div>
                    <div>
                        <h5 class="mb-2 fw-semibold"> {{$ao->type_ao}} #{{$ao->n_ao}}</h5>
                        <div class="mb-2 pt-1">
                            <span>Montant de soumission :</span>
                            <span class="fw-semibold"> {{$ao->mantant_soumission_ao}}</span>
                        </div>
                        <div class="mb-2 pt-1">
                            <span>Date Limit :</span>
                            <span class="fw-semibold"> {{$ao->date_limit_ao}}</span>
                        </div>
                        <div class="mb-2 pt-1">
                            <span>Adjudication :</span>
                            <span class="fw-semibold"> {{$ao->adjudication_ao}}</span>
                        </div>
                        <div class="pt-1">
                            <span>Date Adjudication :</span>
                            <span class="fw-semibold"> 
                                @php
                                $date = $ao->date_adjudication_ao; // Assuming $ao->date_adjudication_ao contains the date value

                                if (!empty($date)) {
                                echo $date;
                                } else {
                                echo 'Sans';
                                }
                                @endphp
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-0" />
            <div class="card-body">
                <div class="row p-sm-3 p-0">
                    <div class="col-xl-12 col-md-12 col-sm-5 col-12 mb-xl-0 mb-md-4 mb-sm-0 mb-4">
                        <h6 class="mb-3">Plus d'informations:</h6>
                        <table>
                            <tbody class="row">
                                <tr class="mb-2">
                                    <td class="fw-semibold">- Maître d'ouvrage :</td>
                                    <td>{{$ao->maître_ao}}</td>
                                </tr>
                                <tr class="mb-2">
                                    <td class="fw-semibold">- Responsables :</td>
                                    <td>{{$ao->responsable_ao}}</td>
                                </tr>
                                <tr class="mb-2">
                                    <td class="fw-semibold">- BU :</td>
                                    <td>{{$ao->bu_ao}}</td>
                                </tr>
                                <tr class="mb-2">
                                    <td class="fw-semibold">- Pays :</td>
                                    <td>{{$ao->pay_ao}}</td>
                                </tr>
                                <tr class="mb-2">
                                    <td class="fw-semibold">- Secteur :</td>
                                    <td>{{$ao->secteur_ao}}</td>
                                </tr>
                                <tr class="mb-2">
                                    <td class="fw-semibold">- Financement :</td>
                                    <td>{{$ao->financement_ao}}</td>
                                </tr>
                                <tr class="mb-2">
                                    <td class="fw-semibold">- Ministere :</td>
                                    <td>{{$ao->ministere_ao}}</td>
                                </tr>
                                <tr class="mb-2">
                                    <td class="fw-semibold">- Departements :</td>
                                    <td>{{$ao->departements_ao}}</td>
                                </tr>
                                <tr class="mb-2">
                                    <td class="fw-semibold">- Partenaires :</td>
                                    <td>{{$ao->partenaires_ao}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Invoice -->

    <!-- Invoice Actions -->
    <div class="col-xl-3 col-md-4 col-12 invoice-actions">
        <div class="card">
            <div class="card-body">
                <button class="btn btn-primary d-grid w-100 mb-2">
                    <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="ti ti-download ti-xs me-1"></i>Télécharger</span>
                </button>
                <button class="btn btn-warning d-grid w-100" onclick="location.href='/ao/edit/{{$ao->id_ao}}'">
                    <span class="d-flex align-items-center justify-content-center text-nowrap"><i class="ti ti-edit ti-xs me-1"></i>Modifier</span>
                </button>
            </div>
        </div>
    </div>
    <!-- /Invoice Actions -->
</div>

<!-- Offcanvas -->
@include('_partials/_offcanvas/offcanvas-send-invoice')
@include('_partials/_offcanvas/offcanvas-add-payment')
<!-- /Offcanvas -->
@endsection
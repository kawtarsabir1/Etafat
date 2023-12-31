@extends('layouts/layoutMaster')

@section('title', 'View')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-user-view.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/app-user-view.js')}}"></script>
<script src="{{asset('assets/js/app-user-view-account.js')}}"></script>
<script type="text/javascript">
  function EditCv(id){
    window.location.href = "/cv/gestion/edit/" + id;
  }
  function ArchiveCv(id){
    var url = baseUrl + 'cv/gestion/' + id;
    var token = $('meta[name="csrf-token"]').attr('content');
    //confirm that you want to delete the employee
    if (!confirm('Are you sure you want to delete this employee?')) return;
    $('#row_' + id).remove();
    $.ajax({
      url: url,
      type: 'DELETE',
      data: {
        _token: token,
        id: id
      },
      success: function (response) {
        alert('Employee deleted successfully');
      },
    });
  }
</script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">View / CV /</span> {{$objEmployee['Nom']}} {{$objEmployee['Prenom']}}
</h4>
<div class="row">
  <!-- User Sidebar -->
  <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
    <!-- User Card -->
    <div class="card mb-4">
      <div class="card-body">
      <div class="user-avatar-section">
          <div class="d-flex align-items-center flex-column">
              @if($objEmployee['PhotoIdentite'] != 'aucun')
              <img class="img-fluid rounded mb-3 pt-1 mt-4" src="{{ asset('/storage/photos/' . $objEmployee['PhotoIdentite']) }}" height="100" width="100" alt="User avatar" />
              @else
              @php
                  $stateNum = rand(0, 4);
                  $states = ['success', 'danger', 'warning', 'info', 'primary'];
                  $state = $states[$stateNum];
                  $name = $objEmployee['Nom']. ' ' .$objEmployee['Prenom'];
                  $initials = strtoupper(substr($objEmployee['Nom'], 0, 1) . substr($objEmployee['Prenom'], 0, 1));
              @endphp
              <span class="img-fluid rounded mb-3 pt-1 mt-4 bg-label-{{ $state }} h1 d-flex justify-content-center align-items-center" style="width: 100px; height: 100px;">{{ $initials }}</span>
              @endif
              <div class="user-info text-center">
                  <h4 class="mb-2">{{ $objEmployee['Nom'] }} {{ $objEmployee['Prenom'] }}</h4>
                  <span class="badge bg-label-secondary mt-1">{{ $objEmployee['Poste'] }}</span>
              </div>
          </div>
      </div>
        <div class="d-flex justify-content-around flex-wrap mt-3 pt-3 pb-4 border-bottom">
          <div class="d-flex align-items-start me-4 mt-3 gap-2">
            <span class="badge bg-label-primary p-2 rounded"><i class='ti ti-checkbox ti-sm'></i></span>
            <div>
              <p class="mb-0 fw-semibold">{{ count($objEmployee['formations']) }}</p>
              <small>Formations</small>
            </div>
          </div>
          <div class="d-flex align-items-start mt-3 gap-2">
            <span class="badge bg-label-primary p-2 rounded"><i class='ti ti-briefcase ti-sm'></i></span>
            <div>
              <p class="mb-0 fw-semibold">{{ count($objEmployee['projets']) }}</p>
              <small>Projects</small>
            </div>
          </div>
        </div>
        <p class="mt-4 small text-uppercase text-muted">Details</p>
        <div class="info-container">
          <ul class="list-unstyled">
            <li class="mb-2">
              <span class="fw-semibold me-1">Telephone Portable:</span>
              <span>{{ $objEmployee['TelephonePortable'] }}</span>
            </li>
            <li class="mb-2">
              <span class="fw-semibold me-1">Telephone Fixe:</span>
              <span>{{ $objEmployee['TelephoneFixe'] }}</span>
            </li>
            <li class="mb-2">
              <span class="fw-semibold me-1">CIN:</span>
              <span>{{ $objEmployee['CIN'] }}</span>
            </li>
            <li class="mb-2">
              <span class="fw-semibold me-1">Date de naissance:</span>
              <span>{{ $objEmployee['DateNaissance'] }}</span>
            </li>
            <li class="mb-2">
              <span class="fw-semibold me-1">Lieu de naissance:</span>
              <span>{{ $objEmployee['LieuNaissance'] }}</span>
            </li>
            <li class="mb-2">
              <span class="fw-semibold me-1">Situation Familiale:</span>
              <span>{{ $objEmployee['SituationFamiliale'] }}</span>
            </li>
            <li class="mb-2">
              <span class="fw-semibold me-1">Nombre d'enfants:</span>
              <span>{{ $objEmployee['NombreEnfants'] }}</span>
            </li>
            <li class="mb-2">
              <span class="fw-semibold me-1">Nationalité:</span>
              <span>{{ $objEmployee['Nationalite'] }}</span>
            </li>
            <li class="mb-2">
              <span class="fw-semibold me-1">Adresse :</span>
              <span>{{ $objEmployee['Adresse_1'] }}</span>
            </li>
            <li class="mb-2">
              <span class="fw-semibold me-1">Code Postal:</span>
              <span>{{ $objEmployee['Code_Postal'] }}</span>
            </li>
            <li class="mb-2">
              <span class="fw-semibold me-1">Profil:</span>
              <span>{{ $objEmployee['Profil'] }}</span>
            </li>
            <li class="mb-2 pt-1">
              <span class="fw-semibold me-1">Email:</span>
              <span>{{ $objEmployee['Email'] }}</span>
            </li>
            <li class="mb-2 pt-1">
              <span class="fw-semibold me-1">Status:</span>
              <span class="badge {{ $objEmployee['Archived'] ? 'bg-label-danger' : 'bg-label-success' }}">{{ $objEmployee['Archived'] ? 'Archived' : 'Actif' }}</span>
            </li>
            <li class="mb-2 pt-1">
              <span class="fw-semibold me-1">Poste:</span>
              <span>{{ $objEmployee['Poste'] }}</span>
            </li>
            <li class="mb-2 pt-1">
              <span class="fw-semibold me-1">Responsable Hierarchique:</span>
              <span>{{ $objEmployee['ResponsableHierarchique'] }}</span>
            </li>
            <li class="mb-2 pt-1">
              <span class="fw-semibold me-1">Departement Affectation:</span>
              <span>{{ $objEmployee['DepartementAffectation'] }}</span>
            </li>
            <li class="mb-2 pt-1">
              <span class="fw-semibold me-1">Contrat Travail Numero:</span>
              <span>{{ $objEmployee['ContratTravailNumero'] }}</span>
            </li>
            <li class="mb-2 pt-1">
              <span class="fw-semibold me-1">Numero CNSS:</span>
              <span>{{ $objEmployee['NumeroCNSS'] }}</span>
            </li>
            <li class="mb-2 pt-1">
              <span class="fw-semibold me-1">Date d'embauche:</span>
              <span>{{ $objEmployee['DateEmbauche'] }}</span>
            </li>
          </ul>
          <div class="d-flex justify-content-center">
            <a href="javascript:;" class="btn btn-primary me-3" onclick="EditCv({{ $objEmployee['ID_Salarie'] }})">Edit</a>
            <a href="javascript:;" class="btn btn-label-danger" onclick="ArchiveCv({{ $objEmployee['ID_Salarie'] }})">Archivé</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /User Card -->
  </div>
  <!--/ User Sidebar -->


  <!-- User Content -->
  <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">

    <!-- Project table -->
    <div class="card mb-4">
      <h5 class="card-header">Liste des projets de l'employé</h5>
      <div class="table-responsive mb-3">
        <table class="table datatable-project border-top" id="{{$objEmployee['ID_Salarie']}}">
          <thead>
            <tr>
              <th></th>
              <th>Objet</th>
              <th class="text-nowrap">Client</th>
              <th>Poste</th>
              <th>Annee</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
    <!-- /Project table -->

    <!-- Activity Timeline -->
    <div class="card mb-4">
      <h5 class="card-header">Chronologie des expériences d'employee</h5>
      <div class="card-body pb-0">
        <ul class="timeline mb-0">
        @php
          $cssClasses = ['timeline-point-primary', 'timeline-point-success', 'timeline-point-info', 'timeline-point-warning'];
          $cssClassIndex = 0;
        @endphp

        @foreach($objEmployee['experiences'] as $experience)
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point {{ $cssClasses[$cssClassIndex % count($cssClasses)] }}"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">{{ $experience->poste }}</h6>
                <small class="text-muted">de {{ $experience->dateDebut }} à {{ $experience->dateFin }}</small>
              </div>
              <p class="mb-2">{{ $experience->employeur }} ({{ $experience->pay }})</p>
              <div class="d-flex flex-wrap gap-2 pt-1">
                <a href="javascript:void(0)" class="me-3">
                  <img src="{{asset('assets/img/icons/misc/pdf.png') }}" alt="Document image" width="15" class="me-2">
                  <span class="fw-semibold text-heading">Attestation</span>
                </a>
              </div>
            </div>
          </li>

          @php
          $cssClassIndex++;
          @endphp
        @endforeach
        </ul>
      </div>
    </div>

    <div class="card mb-4">
      <h5 class="card-header">Chronologie des formations d'employee</h5>
      <div class="card-body pb-0">
        <ul class="timeline mb-0">
        @php
          $cssClasses = ['timeline-point-warning' ,'timeline-point-primary', 'timeline-point-info', 'timeline-point-success'];
          $cssClassIndex = 0;
        @endphp

        @foreach($objEmployee['formations'] as $formation)
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point {{ $cssClasses[$cssClassIndex % count($cssClasses)] }}"></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">{{ $formation->intitule }}</h6>
                <small class="text-muted">{{ $formation->obtention }}</small>
              </div>
              <p class="mb-2">{{ $formation->etablissement }}</p>
            </div>
          </li>

          @php
          $cssClassIndex++;
          @endphp
        @endforeach
        </ul>
      </div>
    </div>
    <!-- /Activity Timeline -->
  </div>
  <!--/ User Content -->
</div>

@endsection

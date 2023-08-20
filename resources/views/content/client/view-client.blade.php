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
  function EditClient(id){
    window.location.href = "/edit/client/" + id;
  }
  
</script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">View / Client /</span> {{$objContact[0]['nom']}} {{$objContact[0]['prenom']}}
</h4>
<div class="row">
  <!-- client Sidebar -->
  <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
     <!-- client Card -->
     <div class="card mb-4">
      <div class="card-body">
        <div class="user-avatar-section">
         <div class="d-flex align-items-center flex-column">
                <span class="fw-semibold me-1"> Type </span>
                <span class="h2">{{ $objClient['type'] }}</span>
                  <!-- <h1 class="badge bg-label-secondary mt-1">{{ $objClient['type'] }}</h1> -->
         </div>
         <div class="d-flex align-items-start me-4 mt-3 gap-2">
            <div class="info-container">
              @php
               $count=1;
              @endphp
              @foreach ($objContact as $Contact)
              @php
                $stateNum = rand(0, 4);
                $states = ['success', 'danger', 'warning', 'info', 'primary'];
                $state = $states[$stateNum];
                $name = $Contact['nom']. ' ' .$Contact['prenom'];
                $initials = strtoupper(substr($Contact['nom'], 0, 1) . substr($Contact['prenom'], 0, 1));
              @endphp
              <p class="mt-1 small text-uppercase text-muted">Contact {{$count++}}</p>
              <span class="img-fluid rounded mb-2 bg-label-{{ $state }} h4 d-flex justify-content-center align-items-center" style="width: 50px; height: 50px;">{{ $initials }}</span>
                        <div class="user-info text-center">
                          <h4 class="mb-2">{{ $Contact['nom'] }} {{$Contact['prenom']}}</h4>
                        </div>
              <ul class="list-unstyled">
                  <li class="mb-2">
                    <span class="fw-semibold me-1">Poste :</span>
                    <span>{{ $Contact['fonction'] }}</span>
                  </li>
                  <li class="mb-2">
                    <span class="fw-semibold me-1">Mail :</span>
                    <span>{{ $Contact['email'] }}</span>
                  </li>
                  <li class="mb-2">
                    <span class="fw-semibold me-1">GSM :</span>
                    <span>{{ $Contact['tel'] }}</span>
                  </li>
                  @endforeach
              </ul>
            </div>
         </div>
        </div>
      </div>
     </div>
     <!-- client Card -->
     <div class="d-flex justify-content-end">
            <a href="javascript:;" class="btn btn-primary me-3" onclick="EditClient({{$objContact[0]['client_id']}})">Edit</a>
            <a href="javascript:;" class="btn btn-label-danger me-3" onclick="">Archivé</a>
        </div>
  </div>
  <!--/ client Sidebar -->

  <!-- client Content -->
   <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
      <div class="card mb-4">
        <h5 class="card-header">Information générale : </h5>
      </div>
      <div class="card mb-4">
         <div class="card-body pb-0">
            <ul class="timeline mb-0">
            @php
              $cssClasses = ['timeline-point-warning' ,'timeline-point-primary', 'timeline-point-info', 'timeline-point-success'];
              $cssClassIndex = 0;
            @endphp
              <li class="timeline-item timeline-item-transparent">
                <span class="timeline-point {{ $cssClasses[0 % count($cssClasses)] }}"></span>
                <div class="timeline-event">
                  <div class="timeline-header mb-1">
                    <h6 class="mb-0">Numéro de Fax :</h6>
                    <small>{{ $objClient['fax'] }}</small>
                  </div>
                </div>
              </li>
              <li class="timeline-item timeline-item-transparent">
                <span class="timeline-point {{ $cssClasses[1 % count($cssClasses)] }}"></span>
                <div class="timeline-event">
                  <div class="timeline-header mb-1">
                    <h6 class="mb-0">Numéro de téléphone :</h6>
                    <small>{{ $objClient['tel'] }}</small>
                  </div>
                </div>
              </li>
              <li class="timeline-item timeline-item-transparent">
                <span class="timeline-point {{ $cssClasses[2 % count($cssClasses)] }}"></span>
                <div class="timeline-event">
                  <div class="timeline-header mb-1">
                    <h6 class="mb-0">Adresse mail :</h6>
                    <small>{{ $objClient['email'] }}</small>
                  </div>
                </div>
              </li>
              <li class="timeline-item timeline-item-transparent">
                <span class="timeline-point {{ $cssClasses[3 % count($cssClasses)] }}"></span>
                <div class="timeline-event">
                  <div class="timeline-header mb-1">
                    <h6 class="mb-0">ICE (Identifiant Commun Entreprise) :</h6>
                    <small>{{ $objClient['ice'] }}</small>
                  </div>
                </div>
              </li>
              <li class="timeline-item timeline-item-transparent">
                <span class="timeline-point {{ $cssClasses[4 % count($cssClasses)] }}"></span>
                <div class="timeline-event">
                  <div class="timeline-header mb-1">
                    <h6 class="mb-0">CNSS :</h6>
                    <small>{{ $objClient['cnss'] }}</small>
                  </div>
                </div>
              </li>
              <li class="timeline-item timeline-item-transparent">
                <span class="timeline-point {{ $cssClasses[5 % count($cssClasses)] }}"></span>
                <div class="timeline-event">
                  <div class="timeline-header mb-1">
                    <h6 class="mb-0">Patente :</h6>
                    <small>{{ $objClient['patente'] }}</small>
                  </div>
                </div>
              </li>
              <li class="timeline-item timeline-item-transparent">
                <span class="timeline-point {{ $cssClasses[6 % count($cssClasses)] }}"></span>
                <div class="timeline-event">
                  <div class="timeline-header mb-1">
                    <h6 class="mb-0">Adresse :</h6>
                    <small>{{ $objClient['adresse'] }}</small>
                  </div>
                </div>
              </li>
              <li class="timeline-item timeline-item-transparent">
                <span class="timeline-point {{ $cssClasses[7 % count($cssClasses)] }}"></span>
                <div class="timeline-event">
                  <div class="timeline-header mb-1">
                    <h6 class="mb-0">Site web :</h6>
                    <!-- change ste with site i couldn't find the site -->
                    @php
                        if ($objClient['ste'] != '') {
                            $ste = $objClient['ste'];
                        } else {
                            $ste = 'pas de site';
                        }
                    @endphp
                    <small>{{ $ste }}</small>
                     <!-- change ste with site i couldn't find site -->
                  </div>
                </div>
              </li>
              <li class="timeline-item timeline-item-transparent">
                <span class="timeline-point {{ $cssClasses[8 % count($cssClasses)] }}"></span>
                <div class="timeline-event">
                  <div class="timeline-header mb-1">
                    <h6 class="mb-0">RC (Registre du commerce) :</h6>
                    <small>{{ $objClient['rc'] }}</small>
                  </div>
                </div>
              </li>
              <li class="timeline-item timeline-item-transparent">
                <span class="timeline-point {{ $cssClasses[9 % count($cssClasses)] }}"></span>
                <div class="timeline-event">
                  <div class="timeline-header mb-1">
                    <h6 class="mb-0">IF (Identifiant Fiscal) :</h6>
                    <small>{{$objClient['if']}}</small>
                  </div>
                </div>
              </li>
              <li class="timeline-item timeline-item-transparent">
                <span class="timeline-point {{ $cssClasses[10 % count($cssClasses)] }}"></span>
                <div class="timeline-event">
                  <div class="timeline-header mb-1">
                    <h6 class="mb-0">RIB :</h6>
                    <small>{{ $objClient['rib'] }}</small>
                  </div>
                </div>
              </li>
              @if($objClient['type']=='Morale')
              <li class="timeline-item timeline-item-transparent">
                <span class="timeline-point {{ $cssClasses[11 % count($cssClasses)] }}"></span>
                <div class="timeline-event">
                  <div class="timeline-header mb-1">
                    <h6 class="mb-0">Nature du client :</h6>
                    <small>{{ $objClient['nature'] }}</small>
                  </div>
                </div>
              </li>
              <li class="timeline-item timeline-item-transparent">
                <span class="timeline-point {{ $cssClasses[12 % count($cssClasses)] }}"></span>
                <div class="timeline-event">
                  <div class="timeline-header mb-1">
                    <h6 class="mb-0">Capital :</h6>
                    <small>{{ $objClient['capital'] }}</small>
                  </div>
                </div>
              </li>
              <li class="timeline-item timeline-item-transparent">
                <span class="timeline-point {{ $cssClasses[13 % count($cssClasses)] }}"></span>
                <div class="timeline-event">
                  <div class="timeline-header mb-1">
                    <h6 class="mb-0">STE :</h6>
                    <small>{{ $objClient['ste'] }}</small>
                  </div>
                </div>
              </li>
              @endif
            </ul>
         </div>
       </div>
   </div>
       

    
   <!-- client Content -->

</div>
@endsection

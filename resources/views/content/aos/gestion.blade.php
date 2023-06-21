@extends('layouts/layoutMaster')

@section('title', 'Gestion')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />

@endsection

@section('vendor-script')
<script>
  // $(function() {
  //   //get input uploadExcel
  //   var input = $('#uploadExcel');

  //   $('#uploadExcel').change(function() {
  //     var formData = new FormData();
  //     formData.append('file', input.prop('files')[0]);
  //     formData.append('_token', '{{ csrf_token() }}');
  //     $.ajax({
  //       url: "{{ route('cv-uploadExcel') }}",
  //       type: 'POST',
  //       data: formData,
  //       contentType: false,
  //       processData: false,
  //       success: function(data) {
  //         alert('Données téléchargées avec succès');
  //         location.reload();
  //       }
  //     });
  //   });
  // });
</script>
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/app-ao-list.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Appels d'offers /</span> Gestion des AOs
</h4>

<div class="card">
  <div class="card-header border-bottom">
    <h5 class="card-title mb-3">Filtre de recherche</h5>
    <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
      <div class="col-md-3 ao_type"></div>
      <div class="col-md-3 maître_ao"></div>
      <div class="col-md-3 ao_bu"></div>
      <div class="col-md-3 ao_rh"></div>
      <input type="file" id="uploadExcel" style="display:none" accept=".xlsx,.xls,.csv" />
    </div>
  </div>
  <div class="card-datatable table-responsive">
    <table class="datatables-users table border-top">
      <thead>
        <tr class="p-2 text-dark" style="background-color: rgba(0,104,171,.3);">
          <th>N°AO</th>
          <th>Type</th>
          <th>Pays</th>
          <th>Maître d'ouvrage</th>
          <th>Montant</th>
          <th>BU</th>
          <th></th>
          <th>Date limite</th>
          <th>Actions</th>
        </tr>
      </thead>
    </table>
  </div>
</div>



@endsection

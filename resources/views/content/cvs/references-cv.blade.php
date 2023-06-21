@extends('layouts/layoutMaster')

@section('title', 'References')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />

@endsection

@section('vendor-script')
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
<script>
  $(function() {
    //get input uploadExcel
    var input = $('#uploadExcel');

    $('#uploadExcel').change(function() {
      var formData = new FormData();
      formData.append('file', input.prop('files')[0]);
      formData.append('_token', '{{ csrf_token() }}');
      $.ajax({
        url: "{{ route('refs-uploadExcel') }}",
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
          alert('Données téléchargées avec succès');
          location.reload();
        }
      });
    });
  });
</script>
<script src="{{asset('assets/js/app-ref-list.js')}}"></script>
@endsection


@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">CVthèque /</span> References
</h4>

<div class="card">
  <div class="card-header border-bottom">
    <h5 class="card-title mb-3">Filtre de recherche</h5>
    <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
      <div class="col-md-4 ref_Client"></div>
      <div class="col-md-4 ref_category"></div>
      <div class="col-md-4 ref_societe"></div>
      <input type="file" id="uploadExcel" style="display:none" accept=".xlsx,.xls,.csv" />
    </div>
  </div>
  <div class="modal fade" id="exLargeModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <iframe src="" width="100%" height="680px"></iframe>
      </div>
    </div>
  </div>
  <div class="card-datatable table-responsive">
    <table class="datatables-users table border-top">
      <thead>
        <tr class="p-2 text-dark h6" style="background-color: rgba(0,104,171,.3);">
          <th>N° Ref</th>
          <th>Societe</th>
          <th>Client</th>
          <th>N° Marche</th>
          <th>Année</th>
          <th>Mantant</th>
          <th>Catégorie</th>
          <th>Fiche</th>
          <th>Actions</th>
        </tr>
      </thead>
    </table>
  </div>
</div>



@endsection
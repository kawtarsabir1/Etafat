@extends('layouts.admin')
@section('content')
@can('equipement_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.equipements.create') }}">
                {{ trans('global.add') }} {{ trans('models.equipement.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('models.equipement.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Equipement">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('models.equipement.fields.categorie') }}
                    </th>
                    <th>
                        {{ trans('models.equipement.fields.famille') }}
                    </th>
                    <th>
                        {{ trans('models.equipement.fields.sous_famille') }}
                    </th>
                    <th>
                        {{ trans('models.equipement.fields.article') }}
                    </th>
                    <th>
                        {{ trans('models.equipement.fields.marque') }}
                    </th>
                    <th>
                        {{ trans('models.equipement.fields.modele') }}
                    </th>
                    <th>
                        {{ trans('models.equipement.fields.fournissuer') }}
                    </th>
                    <th>
                        {{ trans('models.equipement.fields.valeur_acquisition') }}
                    </th>
                    <th>
                        {{ trans('models.equipement.fields.date_acquisition') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('equipement_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.equipements.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.equipements.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'categorie', name: 'categorie' },
{ data: 'famille', name: 'famille' },
{ data: 'sous_famille', name: 'sous_famille' },
{ data: 'article', name: 'article' },
{ data: 'marque', name: 'marque' },
{ data: 'modele', name: 'modele' },
{ data: 'fournissuer', name: 'fournissuer' },
{ data: 'valeur_acquisition', name: 'valeur_acquisition' },
{ data: 'date_acquisition', name: 'date_acquisition' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-Equipement').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection
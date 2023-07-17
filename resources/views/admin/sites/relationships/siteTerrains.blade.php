@can('terrain_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.terrains.create') }}">
                {{ trans('global.add') }} {{ trans('models.terrain.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('models.terrain.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-siteTerrains">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('models.terrain.fields.id') }}
                        </th>
                        <th>
                            {{ trans('models.terrain.fields.nom') }}
                        </th>
                        <th>
                            {{ trans('models.terrain.fields.adresse') }}
                        </th>
                        <th>
                            {{ trans('models.terrain.fields.type_terrain') }}
                        </th>
                        <th>
                            {{ trans('models.terrain.fields.statut') }}
                        </th>
                        <th>
                            {{ trans('models.terrain.fields.categorie') }}
                        </th>
                        <th>
                            {{ trans('models.terrain.fields.nature_juridique') }}
                        </th>
                        <th>
                            {{ trans('models.terrain.fields.type_acquisition') }}
                        </th>
                        <th>
                            {{ trans('models.terrain.fields.superficie_globale') }}
                        </th>
                        <th>
                            {{ trans('models.terrain.fields.superficie_acquise') }}
                        </th>
                        <th>
                            {{ trans('models.terrain.fields.superficie_restante') }}
                        </th>
                        <th>
                            {{ trans('models.terrain.fields.superficie_batie') }}
                        </th>
                        <th>
                            {{ trans('models.terrain.fields.superficie_nue') }}
                        </th>
                        <th>
                            {{ trans('models.terrain.fields.type_foncier') }}
                        </th>
                        <th>
                            {{ trans('models.terrain.fields.reference_fonciere') }}
                        </th>
                        <th>
                            {{ trans('models.terrain.fields.valeur_acquisition') }}
                        </th>
                        <th>
                            {{ trans('models.terrain.fields.date_acquisition') }}
                        </th>
                        <th>
                            {{ trans('models.terrain.fields.site') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($terrains as $key => $terrain)
                        <tr data-entry-id="{{ $terrain->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $terrain->id ?? '' }}
                            </td>
                            <td>
                                {{ $terrain->nom ?? '' }}
                            </td>
                            <td>
                                {{ $terrain->adresse ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Terrain::TYPE_TERRAIN_SELECT[$terrain->type_terrain] ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Terrain::STATUT_SELECT[$terrain->statut] ?? '' }}
                            </td>
                            <td>
                                {{ $terrain->categorie ?? '' }}
                            </td>
                            <td>
                                {{ $terrain->nature_juridique ?? '' }}
                            </td>
                            <td>
                                {{ $terrain->type_acquisition ?? '' }}
                            </td>
                            <td>
                                {{ $terrain->superficie_globale ?? '' }}
                            </td>
                            <td>
                                {{ $terrain->superficie_acquise ?? '' }}
                            </td>
                            <td>
                                {{ $terrain->superficie_restante ?? '' }}
                            </td>
                            <td>
                                {{ $terrain->superficie_batie ?? '' }}
                            </td>
                            <td>
                                {{ $terrain->superficie_nue ?? '' }}
                            </td>
                            <td>
                                {{ $terrain->type_foncier ?? '' }}
                            </td>
                            <td>
                                {{ $terrain->reference_fonciere ?? '' }}
                            </td>
                            <td>
                                {{ $terrain->valeur_acquisition ?? '' }}
                            </td>
                            <td>
                                {{ $terrain->date_acquisition ?? '' }}
                            </td>
                            <td>
                                {{ $terrain->site->nom ?? '' }}
                            </td>
                            <td>
                                @can('terrain_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.terrains.show', $terrain->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('terrain_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.terrains.edit', $terrain->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('terrain_delete')
                                    <form action="{{ route('admin.terrains.destroy', $terrain->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('terrain_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.terrains.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
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

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-siteTerrains:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
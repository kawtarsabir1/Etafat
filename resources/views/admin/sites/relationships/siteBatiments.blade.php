@can('batiment_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.batiments.create') }}">
                {{ trans('global.add') }} {{ trans('models.batiment.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('models.batiment.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-siteBatiments">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('models.batiment.fields.nom') }}
                        </th>
                        <th>
                            {{ trans('models.batiment.fields.type') }}
                        </th>
                        <th>
                            {{ trans('models.batiment.fields.adresse') }}
                        </th>
                        <th>
                            {{ trans('models.batiment.fields.contact') }}
                        </th>
                        <th>
                            {{ trans('models.batiment.fields.categorie') }}
                        </th>
                        <th>
                            {{ trans('models.batiment.fields.titre_foncier') }}
                        </th>
                        <th>
                            {{ trans('models.batiment.fields.niveau') }}
                        </th>
                        <th>
                            {{ trans('models.batiment.fields.site') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($batiments as $key => $batiment)
                        <tr data-entry-id="{{ $batiment->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $batiment->nom ?? '' }}
                            </td>
                            <td>
                                {{ $batiment->type ?? '' }}
                            </td>
                            <td>
                                {{ $batiment->adresse ?? '' }}
                            </td>
                            <td>
                                {{ $batiment->contact ?? '' }}
                            </td>
                            <td>
                                {{ $batiment->categorie ?? '' }}
                            </td>
                            <td>
                                {{ $batiment->titre_foncier ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Batiment::NIVEAU_SELECT[$batiment->niveau] ?? '' }}
                            </td>
                            <td>
                                {{ $batiment->site->nom ?? '' }}
                            </td>
                            <td>
                                @can('batiment_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.batiments.show', $batiment->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('batiment_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.batiments.edit', $batiment->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('batiment_delete')
                                    <form action="{{ route('admin.batiments.destroy', $batiment->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('batiment_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.batiments.massDestroy') }}",
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
  let table = $('.datatable-siteBatiments:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
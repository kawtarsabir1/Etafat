@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('models.consommation.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.consommations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('models.consommation.fields.id') }}
                        </th>
                        <td>
                            {{ $consommation->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.consommation.fields.date') }}
                        </th>
                        <td>
                            {{ $consommation->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.consommation.fields.valeur') }}
                        </th>
                        <td>
                            {{ $consommation->valeur }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.consommation.fields.type') }}
                        </th>
                        <td>
                            {{ App\Models\Consommation::TYPE_SELECT[$consommation->type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.consommation.fields.batiment') }}
                        </th>
                        <td>
                            {{ $consommation->batiment->nom ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.consommations.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
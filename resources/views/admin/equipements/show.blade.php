@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('models.equipement.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.equipements.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('models.equipement.fields.id') }}
                        </th>
                        <td>
                            {{ $equipement->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.equipement.fields.categorie') }}
                        </th>
                        <td>
                            {{ $equipement->categorie }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.equipement.fields.famille') }}
                        </th>
                        <td>
                            {{ $equipement->famille }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.equipement.fields.sous_famille') }}
                        </th>
                        <td>
                            {{ $equipement->sous_famille }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.equipement.fields.article') }}
                        </th>
                        <td>
                            {{ $equipement->article }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.equipement.fields.marque') }}
                        </th>
                        <td>
                            {{ $equipement->marque }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.equipement.fields.modele') }}
                        </th>
                        <td>
                            {{ $equipement->modele }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.equipement.fields.fournissuer') }}
                        </th>
                        <td>
                            {{ $equipement->fournissuer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.equipement.fields.valeur_acquisition') }}
                        </th>
                        <td>
                            {{ $equipement->valeur_acquisition }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.equipement.fields.date_acquisition') }}
                        </th>
                        <td>
                            {{ $equipement->date_acquisition }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.equipements.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
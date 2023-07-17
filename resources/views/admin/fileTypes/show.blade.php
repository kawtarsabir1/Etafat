@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('models.fileType.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.file-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('models.fileType.fields.id') }}
                        </th>
                        <td>
                            {{ $fileType->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.fileType.fields.name') }}
                        </th>
                        <td>
                            {{ $fileType->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.fileType.fields.description') }}
                        </th>
                        <td>
                            {{ $fileType->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.fileType.fields.nomenclature') }}
                        </th>
                        <td>
                            {{ $fileType->nomenclature }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.fileType.fields.parent') }}
                        </th>
                        <td>
                            {{ $fileType->parent }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.file-types.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
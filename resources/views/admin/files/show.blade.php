@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('models.file.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.files.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('models.file.fields.id') }}
                        </th>
                        <td>
                            {{ $file->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.file.fields.name') }}
                        </th>
                        <td>
                            {{ $file->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.file.fields.size') }}
                        </th>
                        <td>
                            {{ $file->size }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.file.fields.mime_type') }}
                        </th>
                        <td>
                            {{ $file->mime_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.file.fields.ocr_content') }}
                        </th>
                        <td>
                            {{ $file->ocr_content }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.file.fields.user') }}
                        </th>
                        <td>
                            {{ $file->user->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.file.fields.commentaire') }}
                        </th>
                        <td>
                            {{ $file->commentaire }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.file.fields.associated_to') }}
                        </th>
                        <td>
                            {{ $file->associated_to }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.file.fields.file') }}
                        </th>
                        <td>
                            @if($file->file)
                                <a href="{{ $file->file->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.file.fields.type') }}
                        </th>
                        <td>
                            {{ $file->type->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.file.fields.site') }}
                        </th>
                        <td>
                            {{ $file->site->nom ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.file.fields.parent') }}
                        </th>
                        <td>
                            {{ $file->parent->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('models.file.fields.archived') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $file->archived ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.files.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
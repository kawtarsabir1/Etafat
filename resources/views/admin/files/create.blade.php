@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('models.file.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.files.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">{{ trans('models.file.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.file.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="size">{{ trans('models.file.fields.size') }}</label>
                <input class="form-control {{ $errors->has('size') ? 'is-invalid' : '' }}" type="number" name="size" id="size" value="{{ old('size', '') }}" step="0.01">
                @if($errors->has('size'))
                    <div class="invalid-feedback">
                        {{ $errors->first('size') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.file.fields.size_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mime_type">{{ trans('models.file.fields.mime_type') }}</label>
                <input class="form-control {{ $errors->has('mime_type') ? 'is-invalid' : '' }}" type="text" name="mime_type" id="mime_type" value="{{ old('mime_type', '') }}">
                @if($errors->has('mime_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('mime_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.file.fields.mime_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ocr_content">{{ trans('models.file.fields.ocr_content') }}</label>
                <input class="form-control {{ $errors->has('ocr_content') ? 'is-invalid' : '' }}" type="text" name="ocr_content" id="ocr_content" value="{{ old('ocr_content', '') }}">
                @if($errors->has('ocr_content'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ocr_content') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.file.fields.ocr_content_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_id">{{ trans('models.file.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.file.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="commentaire">{{ trans('models.file.fields.commentaire') }}</label>
                <textarea class="form-control {{ $errors->has('commentaire') ? 'is-invalid' : '' }}" name="commentaire" id="commentaire">{{ old('commentaire') }}</textarea>
                @if($errors->has('commentaire'))
                    <div class="invalid-feedback">
                        {{ $errors->first('commentaire') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.file.fields.commentaire_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="associated_to">{{ trans('models.file.fields.associated_to') }}</label>
                <input class="form-control {{ $errors->has('associated_to') ? 'is-invalid' : '' }}" type="text" name="associated_to" id="associated_to" value="{{ old('associated_to', '') }}">
                @if($errors->has('associated_to'))
                    <div class="invalid-feedback">
                        {{ $errors->first('associated_to') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.file.fields.associated_to_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="file">{{ trans('models.file.fields.file') }}</label>
                <div class="needsclick dropzone {{ $errors->has('file') ? 'is-invalid' : '' }}" id="file-dropzone">
                </div>
                @if($errors->has('file'))
                    <div class="invalid-feedback">
                        {{ $errors->first('file') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.file.fields.file_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="type_id">{{ trans('models.file.fields.type') }}</label>
                <select class="form-control select2 {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type_id" id="type_id" required>
                    @foreach($types as $id => $entry)
                        <option value="{{ $id }}" {{ old('type_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.file.fields.type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="site_id">{{ trans('models.file.fields.site') }}</label>
                <select class="form-control select2 {{ $errors->has('site') ? 'is-invalid' : '' }}" name="site_id" id="site_id" required>
                    @foreach($sites as $id => $entry)
                        <option value="{{ $id }}" {{ old('site_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('site'))
                    <div class="invalid-feedback">
                        {{ $errors->first('site') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.file.fields.site_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="parent_id">{{ trans('models.file.fields.parent') }}</label>
                <select class="form-control select2 {{ $errors->has('parent') ? 'is-invalid' : '' }}" name="parent_id" id="parent_id">
                    @foreach($parents as $id => $entry)
                        <option value="{{ $id }}" {{ old('parent_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('parent'))
                    <div class="invalid-feedback">
                        {{ $errors->first('parent') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.file.fields.parent_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('archived') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="archived" value="0">
                    <input class="form-check-input" type="checkbox" name="archived" id="archived" value="1" {{ old('archived', 0) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="archived">{{ trans('models.file.fields.archived') }}</label>
                </div>
                @if($errors->has('archived'))
                    <div class="invalid-feedback">
                        {{ $errors->first('archived') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.file.fields.archived_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.fileDropzone = {
    url: '{{ route('admin.files.storeMedia') }}',
    maxFilesize: 500, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 500
    },
    success: function (file, response) {
      $('form').find('input[name="file"]').remove()
      $('form').append('<input type="hidden" name="file" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="file"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($file) && $file->file)
      var file = {!! json_encode($file->file) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="file" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection
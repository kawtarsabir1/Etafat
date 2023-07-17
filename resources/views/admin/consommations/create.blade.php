@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('models.consommation.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.consommations.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="date">{{ trans('models.consommation.fields.date') }}</label>
                <input class="form-control date {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="{{ old('date') }}">
                @if($errors->has('date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.consommation.fields.date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="valeur">{{ trans('models.consommation.fields.valeur') }}</label>
                <input class="form-control {{ $errors->has('valeur') ? 'is-invalid' : '' }}" type="number" name="valeur" id="valeur" value="{{ old('valeur', '') }}" step="0.01">
                @if($errors->has('valeur'))
                    <div class="invalid-feedback">
                        {{ $errors->first('valeur') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.consommation.fields.valeur_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('models.consommation.fields.type') }}</label>
                <select class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type" id="type" required>
                    <option value disabled {{ old('type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Consommation::TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('type', '1') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.consommation.fields.type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="batiment_id">{{ trans('models.consommation.fields.batiment') }}</label>
                <select class="form-control select2 {{ $errors->has('batiment') ? 'is-invalid' : '' }}" name="batiment_id" id="batiment_id" required>
                    @foreach($batiments as $id => $entry)
                        <option value="{{ $id }}" {{ old('batiment_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('batiment'))
                    <div class="invalid-feedback">
                        {{ $errors->first('batiment') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.consommation.fields.batiment_helper') }}</span>
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
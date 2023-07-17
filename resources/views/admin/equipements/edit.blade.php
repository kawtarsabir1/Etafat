@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('models.equipement.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.equipements.update", [$equipement->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="categorie">{{ trans('models.equipement.fields.categorie') }}</label>
                <input class="form-control {{ $errors->has('categorie') ? 'is-invalid' : '' }}" type="text" name="categorie" id="categorie" value="{{ old('categorie', $equipement->categorie) }}">
                @if($errors->has('categorie'))
                    <div class="invalid-feedback">
                        {{ $errors->first('categorie') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.equipement.fields.categorie_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="famille">{{ trans('models.equipement.fields.famille') }}</label>
                <input class="form-control {{ $errors->has('famille') ? 'is-invalid' : '' }}" type="text" name="famille" id="famille" value="{{ old('famille', $equipement->famille) }}">
                @if($errors->has('famille'))
                    <div class="invalid-feedback">
                        {{ $errors->first('famille') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.equipement.fields.famille_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sous_famille">{{ trans('models.equipement.fields.sous_famille') }}</label>
                <input class="form-control {{ $errors->has('sous_famille') ? 'is-invalid' : '' }}" type="text" name="sous_famille" id="sous_famille" value="{{ old('sous_famille', $equipement->sous_famille) }}">
                @if($errors->has('sous_famille'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sous_famille') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.equipement.fields.sous_famille_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="article">{{ trans('models.equipement.fields.article') }}</label>
                <input class="form-control {{ $errors->has('article') ? 'is-invalid' : '' }}" type="text" name="article" id="article" value="{{ old('article', $equipement->article) }}">
                @if($errors->has('article'))
                    <div class="invalid-feedback">
                        {{ $errors->first('article') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.equipement.fields.article_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="marque">{{ trans('models.equipement.fields.marque') }}</label>
                <input class="form-control {{ $errors->has('marque') ? 'is-invalid' : '' }}" type="text" name="marque" id="marque" value="{{ old('marque', $equipement->marque) }}">
                @if($errors->has('marque'))
                    <div class="invalid-feedback">
                        {{ $errors->first('marque') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.equipement.fields.marque_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="modele">{{ trans('models.equipement.fields.modele') }}</label>
                <input class="form-control {{ $errors->has('modele') ? 'is-invalid' : '' }}" type="text" name="modele" id="modele" value="{{ old('modele', $equipement->modele) }}">
                @if($errors->has('modele'))
                    <div class="invalid-feedback">
                        {{ $errors->first('modele') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.equipement.fields.modele_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="fournissuer">{{ trans('models.equipement.fields.fournissuer') }}</label>
                <input class="form-control {{ $errors->has('fournissuer') ? 'is-invalid' : '' }}" type="text" name="fournissuer" id="fournissuer" value="{{ old('fournissuer', $equipement->fournissuer) }}">
                @if($errors->has('fournissuer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('fournissuer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.equipement.fields.fournissuer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="valeur_acquisition">{{ trans('models.equipement.fields.valeur_acquisition') }}</label>
                <input class="form-control {{ $errors->has('valeur_acquisition') ? 'is-invalid' : '' }}" type="number" name="valeur_acquisition" id="valeur_acquisition" value="{{ old('valeur_acquisition', $equipement->valeur_acquisition) }}" step="0.01">
                @if($errors->has('valeur_acquisition'))
                    <div class="invalid-feedback">
                        {{ $errors->first('valeur_acquisition') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.equipement.fields.valeur_acquisition_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_acquisition">{{ trans('models.equipement.fields.date_acquisition') }}</label>
                <input class="form-control date {{ $errors->has('date_acquisition') ? 'is-invalid' : '' }}" type="text" name="date_acquisition" id="date_acquisition" value="{{ old('date_acquisition', $equipement->date_acquisition) }}">
                @if($errors->has('date_acquisition'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_acquisition') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('models.equipement.fields.date_acquisition_helper') }}</span>
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
<?php

namespace App\Http\Requests;

use App\Models\Equipement;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEquipementRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('equipement_edit');
    }

    public function rules()
    {
        return [
            'categorie' => [
                'string',
                'nullable',
            ],
            'famille' => [
                'string',
                'nullable',
            ],
            'sous_famille' => [
                'string',
                'nullable',
            ],
            'article' => [
                'string',
                'nullable',
            ],
            'marque' => [
                'string',
                'nullable',
            ],
            'modele' => [
                'string',
                'nullable',
            ],
            'fournissuer' => [
                'string',
                'nullable',
            ],
            'date_acquisition' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Models\Consommation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreConsommationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('consommation_create');
    }

    public function rules()
    {
        return [
            'date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'valeur' => [
                'numeric',
            ],
            'type' => [
                'required',
            ],
            'batiment_id' => [
                'required',
                'integer',
            ],
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Models\Etage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreEtageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('etage_create');
    }

    public function rules()
    {
        return [
            'niveau'=>["nullable","string"],
            'site_id'=>["nullable","integer"],
            'provisoir'=>["nullable","string"],
            'batiment_id'=>["nullable","integer"],
        ];
    }
}

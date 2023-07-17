<?php

namespace App\Http\Requests;

use App\Models\Etage;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateEtageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('etage_edit');
    }

    public function rules()
    {
        return [
            'niveau'=>["nullable","string"],
            'site_id'=>["nullable","integer"],
            'provisoir'              =>["nullable","string"],
            'batiment_id'=>["nullable","integer"],
        ];
    }
}

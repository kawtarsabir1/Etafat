<?php

namespace App\Http\Requests;

use App\Models\Local;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLocalRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('local_edit');
    }

    public function rules()
    {
        return [
            "type"              =>["nullable","string"],
            "niveau"            =>["nullable","string"],
            "superficie"        =>["nullable","string"],
            'provisoir'              =>["nullable","string"],
            'site_id'           =>["nullable","string"],
            'etage_id'          =>["nullable","string"],

            'code'              =>["nullable","string"],
            'denomination'      =>["nullable","string"],
            'adresse'           =>["nullable","string"],
            'type_detention'    =>["nullable","string"],
            'proprietaire'      =>["nullable","string"],
            'bailleur'          =>["nullable","string"],
            'type_activite'     =>["nullable","string"],
            'type_espace'       =>["nullable","string"],
            'nom_espace'        =>["nullable","string"],
            'code_espace'       =>["nullable","string"],
            'superficie_espace' =>["nullable","string"],
        ];
    }
}

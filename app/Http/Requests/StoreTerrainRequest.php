<?php

namespace App\Http\Requests;

use App\Models\Terrain;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTerrainRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('terrain_create');
    }

    public function rules()
    {
        return [
            "nom"=>["required","string"],
            "superficie"=>["nullable","string"],
            "superficie_batie"=>["nullable","string"],
            "titre_foncier"=>["nullable","string"],
            "requisition"=>["nullable","string"],
            "propretaire"=>["nullable","string"],
            'provisoir'              =>["nullable","string"],
            "prix_acquisition"=>["nullable","string"],
            "statut_foncier"=>["nullable","string"],
            "type_detention"=>["nullable","string"],
            "agence"=>["nullable","string"],
            "type_terrain"=>["nullable","string"],
            "site_id"=>["required","integer"],
            "code"=>["nullable","string"],
            "adresse"=>["nullable","string"]
        ];
    }
}

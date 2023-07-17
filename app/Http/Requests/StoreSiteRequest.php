<?php

namespace App\Http\Requests;

use App\Models\Site;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSiteRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('site_create');
    }

    public function rules()
    {
        return [
 
            "code"=> ["string","required"],
            "code_patrimoine"=> ["string","required"],
            "n_convention"=> ["string","nullable"],
            "denomination"=> ["string","required"],
            "adresse"=> ["string","required"],
            "superficie"=> ["string","nullable"],
            "type_detention"=> ["string","nullable"],
            "geom"=> ["string","nullable"],
            "region_bam_id"=> ["integer","nullable"],
            "region_postale_id"=> ["integer","nullable"],
            "commune_id"=> ["integer","nullable"],
            "proprietaire"  =>["string", "nullable"],
            "bailleur"  =>["string", "nullable"],
            "monument_historique"   =>["string", "nullable"],
            "categorie_batiment"    =>["string", "nullable"],
            "superficie_total"  =>["string", "nullable"],
            'provisoir'              =>["nullable","string"],
            "superficie_batie"  =>["string", "nullable"],
            "superficie_plancher"   =>["string", "nullable"],
            "superficie_terrain"    =>["string", "nullable"],
            "sub"   =>["string", "nullable"],
            "sun"   =>["string", "nullable"],
            "shob"  =>["string", "nullable"],
            "shon"  =>["string", "nullable"],
            "superficie_louee"  =>["string", "nullable"],
            "hauteur"   =>["string", "nullable"],
            "carnet_sante"  =>["string", "nullable"],

        ];
    }
}

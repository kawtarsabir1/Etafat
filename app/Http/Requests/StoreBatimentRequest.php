<?php

namespace App\Http\Requests;

use App\Models\Batiment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBatimentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('batiment_create');
    }

    public function rules()
    {
        return [
            'titre_foncier'=>["nullable","string"],
            'requisition'=>["nullable","string"],
            'proprietaire'=>["nullable","string"],
            'provisoir'              =>["nullable","string"],
            'carnet_sante'=>["nullable","string"],
            'prix_acquisition'=>["nullable","string"],
            'terrain_id'=>["nullable","integer"],
            'site_id'=>["nullable","integer"],
            'code'=>["string","nullable"],
            'denomination'=>["string","nullable"],
            'adresse'=>["string","nullable"],
            'type_detention'=>["string","nullable"],
            'bailleur'=>["string","nullable"],
            'monument_historique'=>["string","nullable"],
            'categorie_batiment'=>["string","nullable"],
            'type_construction'=>["string","nullable"],
            'statut_juridique'=>["string","nullable"],
            'statut_propriete'=>["string","nullable"],
            'taxe'=>["string","nullable"],
            'niveaux_autorise'=>["integer","nullable"],
            'niveaux_construit'=>["integer","nullable"],
            'niveaux_dessus_sol'=>["integer","nullable"],
            'niveaux_dessous_sol'=>["integer","nullable"],
            'date_service'=>["date","nullable"],
            'nombre_accees'=>["integer","nullable"],
            'etat_accessibilite'=>["string","nullable"],
            'superficie_plancher'=>["string","nullable"],
            'superficie_terrain'=>["string","nullable"],
            'sub'=>["string","nullable"],
            'sun'=>["string","nullable"],
            'shob'=>["string","nullable"],
            'shon'=>["string","nullable"],
            'superficie_louee'=>["string","nullable"],
            'hauteur'=>["string","nullable"],
        ];
    }
}

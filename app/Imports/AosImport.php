<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Aos;
use App\Models\Rh;
use App\Models\Busunit;


class AosImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $rh = Rh::where('rhNom', $row['responsable'])->first();
        if($rh == null){
            $rh = new Rh([
                'rhNom' => $row['responsable'],
            ]);
            $rh->save();
        }

        $bu = Busunit::where('buNom', $row['bu'])->first();
        if($bu == null){
            $bu = new Busunit([
                'buNom' => $row['bu'],
            ]);
            $bu->save();
        }
            
        $ao = new Aos([
          'type_ao' => $row['type'],
            'pay_ao' => $row['pays'],
            'secteur_ao' => $row['secteur'],
            'financement_ao' => $row['financement'],
            'ministere_ao' => $row['ministere'],
            'societe_ao' => 'Etafat',
            'n_ao' => $row['n_ao'],
            'lot_ao' => $row['lot'],
            'objet_ao' => $row['objet'],
            'maître_ao' => $row['client'],
            'caution_provisoire_ao' => $row['caution_provisoire'],
            'annulation_ao' => $row['annulation_caution'],
            'budget_ao' => $row['budget'],
            'date_limit_ao' => $row['date_limit'],
            'mantant_soumission_ao' => $row['montant_soumission'],
            'bu_ao' => $bu->id,
            'departements_ao' => $row['departements'],
            'departements_part' => "",
            'partenaires_ao' => $row['partenaires'],
            'partenaires_part' => "",
            'soustraitants_ao' => "",
            'soustraitants_part' => "",
            'responsable_ao' => $rh->id,
            'adjudication_ao' => $row['adjudication'],
            'date_adjudication_ao' => $row['date_adjudication'],
            'motif_ao' => $row['motif'],
            'rejet_ao' => $row['rejet'],
            'adjudicataire_ao' => $row['adjudicataire'],
            'mantant_moins_ao' => $row['montant_moins_disant'],
            'archived' => 0,
        ]);
    
        $ao->save();
    }
}
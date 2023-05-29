<?php

namespace App\Imports;

use App\Models\Formations;
use App\Models\Informations;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class FormationsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $salarie = Informations::where('CIN', $row['cin'])->first();
        if($salarie == null){
            return null;
        }
        $formation = new Formations([
            'ID_Salarie' => $salarie->ID_Salarie,
            'intitule' => $row['intitule'],
            'etablissement' => $row['etablissement'],
            'obtention' => $row['obtention'],
            'diplome' => $row['diplome']
        ]);
        $formation->save();
    }
}

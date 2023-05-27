<?php

namespace App\Imports;

use App\Models\Projet;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Informations;
use App\Models\Refs;

class ProjetsImport implements ToModel,WithHeadingRow
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
        $ref = Refs::where('nMarche', $row['numero_de_marche'])->first();
        if($ref == null){
            return null;
        }
        $projet =  new Projet([
            'ID_Salarie' => $salarie->ID_Salarie,
            'ID_reference'=> $ref->ID_Ref,
            'poste'=> $row['poste'],
            'missions'=> $row['missions'],
            'description'=> $row['description']
        ]);
        $projet->save();
    }
}

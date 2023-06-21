<?php

namespace App\Imports;

use App\Models\Refs;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RefsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $ref = new Refs([
            'client' => $row['client'],
            'mantant' => $row['montants'],
            'annee' => $row['annee'],
            'attestation' => $row['attestation'],
            'objet' => $row['objet'],
            'nMarche' => $row['nmarche'],
            'category' => $row['category'],
            'fiche' => $row['fiche'],
            'logo' => $row['logo'],
            'localisation' => $row['localisation'],
            'nRef' => $row['nref'],
            'societe' => $row['societe'],
            'missions' => $row['missions'],
            'description' => $row['description'],
            'archived' => 0,
        ]);
        
        $ref->save();
    }
}


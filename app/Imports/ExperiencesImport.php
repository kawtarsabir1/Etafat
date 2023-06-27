<?php

namespace App\Imports;

use App\Models\Experiences;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\Informations;
use App\Models\Taches;

class ExperiencesImport implements ToModel,WithHeadingRow
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
        $experience = new Experiences([
            'ID_Salarie' => $salarie->ID_Salarie,
            'employeur' => $row['employeur'],
            'poste'=> $row['poste'],
            'pay'=> $row['pay'],
            'dateDebut' => $row['date_du'],
            'dateFin' => $row['date_au'],
            'attestation' => $row['attestation']
        ]);
        $experience->save();

        $taches = explode('-' , $row['taches']);
        foreach($taches as $tache){
            $newTache = new Taches([
                'ID_Ref' => $experience->ID_Experience,
                'tache' => $tache
            ]);
            $newTache->save();
        }
    }
}

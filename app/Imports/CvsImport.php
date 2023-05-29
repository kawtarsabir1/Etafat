<?php

namespace App\Imports;

use App\Models\Informations;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class CvsImport implements WithMultipleSheets 
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function sheets(): array
    {
        return [
            'informations' => new InformationsImport(),
            'formations' => new FormationsImport(),
            'experiences' => new ExperiencesImport(),
            'projets' => new ProjetsImport(),
        ];
    }
}

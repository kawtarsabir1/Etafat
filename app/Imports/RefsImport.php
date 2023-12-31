<?php

namespace App\Imports;

use App\Models\Refs;
use App\Models\Societe;
use App\Models\Category;
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

        //get societe by name
        $societe = Societe::where('societeNom', $row['societe'])->first();
        if (!$societe) {
            $societe = new Societe();
            $societe->societeNom = $row['societe'];
            $societe->save();
        }

        $categories = [];
        foreach (explode(',', $row['category']) as $cat) {
            $category = Category::where('categoryNom', $cat)->first();
            if (!$category) {
                $category = new Category();
                $category->categoryNom = $cat;
                $category->save();
            }
            //save ids of categories in array
            $categories[] = $category->id;
        }
        $categories = implode(',', $categories);
        $ref = new Refs([
            'client' => $row['client'],
            'mantant' => $row['montants'],
            'montantTraveaux' => $row['montants'],
            'annee' => $row['annee'],
            'attestation' => $row['attestation'],
            'objet' => $row['objet'],
            'nMarche' => $row['nmarche'],
            'categories' => $categories,
            'fiche' => $row['fiche'],
            'logo' => $row['logo'],
            'localisation' => $row['localisation'],
            'nRef' => $row['reference'],
            'nIntern' => $row['nref'],
            'societe' => $societe->id,
            'missions' => $row['missions'],
            'description' => $row['description'],
            'archived' => 0,
        ]);
        
        $ref->save();
    }
}


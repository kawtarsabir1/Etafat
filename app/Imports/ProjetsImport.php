<?php

namespace App\Imports;

use App\Models\Projet;
use App\Models\Post;
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

        $post = Post::where('postNom', $row['poste'])->first();
        if($post == null){
            $post = new Post([
                'postNom' => $row['poste'],
            ]);
            $post->save();
        }
        $projet =  new Projet([
            'ID_Salarie' => $salarie->ID_Salarie,
            'ID_reference'=> $ref->ID_Ref,
            'poste'=> $post->id,
            'missions'=> $row['missions'],
            'description'=> $row['description']
        ]);
        $projet->save();
    }
}

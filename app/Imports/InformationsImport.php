<?php

namespace App\Imports;

use App\Models\Informations;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InformationsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
  
        $cv = new Informations([
            'Nom' => $row['nom'],
            'Prenom' => $row['prenom'],
            'CIN' => $row['cin'],
            'DateNaissance' => $row['date_naissance'],
            'LieuNaissance' => $row['lieu_de_naissance'],
            'SituationFamiliale' => $row['situation_familiale'],
            'NombreEnfants' => $row['nombre_denfants'],
            'Nationalite' => $row['nationalite'],
            'Adresse_1' => $row['adresse_1'],
            'Adresse_2' => $row['adresse_2_optionnel'],
            'Code_Postal' => $row['code_postal'],
            'Email' => $row['email'],
            'TelephoneFixe' => $row['telephone_fixe'],
            'TelephonePortable' => $row['telephone_portable'],
            'PhotoIdentite' => $row['photo_identite'],
            'Profil' => $row['profil'],
            'NumeroCNSS' => $row['numero_cnss'],
            'ResponsableHierarchique' => $row['responsable_hierarchique'],
            'Poste' => $row['poste'],
            'DateEmbauche' => $row['date_embauche'],
            'DepartementAffectation' => $row['departement_affectation'],
            'ContratTravailNumero' => $row['contrat_travail_numero'],
            'TypeContrat' => $row['type_de_contrat'],
            'ContratDu' => $row['contrat_du'],
            'ContratAu' => $row['contrat_au'],
            'Langues' => $row['langues_l1l2l3'],
            'Niveau' => $row['niveau_n1n2n3'],
            'Archived' => 0
        ]);
        $cv->save();
    }
}

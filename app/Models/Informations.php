<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Informations extends Model
{
    protected $table = 'informations';

    protected $primaryKey = 'ID_Salarie';

    protected $fillable = [
        'Nom',
        'Prenom',
        'CIN',
        'DateNaissance',
        'LieuNaissance',
        'SituationFamiliale',
        'NombreEnfants',
        'Nationalite',
        'Adresse_1',
        'Adresse_2',
        'Code_Postal',
        'Email',
        'TelephoneFixe',
        'TelephonePortable',
        'PhotoIdentite',
        'Profil',
        'NumeroCNSS',
        'ResponsableHierarchique',
        'Poste',
        'DateEmbauche',
        'DepartementAffectation',
        'ContratTravailNumero',
        'TypeContrat',
        'ContratDu',
        'ContratAu',
        'Langues',
        'Niveau',
        'Archived'
    ];

}

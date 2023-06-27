<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AOs extends Model
{
    use HasFactory;

    protected $table = 'aos';

    protected $primaryKey = 'id_ao';

    protected $fillable = [
        'type_ao',
        'pay_ao',
        'secteur_ao',
        'financement_ao',
        'ministere_ao',
        'societe_ao',
        'n_ao',
        'lot_ao',
        'objet_ao',
        'maître_ao',
        'objet_ao',
        'caution_provisoire_ao',
        'annulation_ao',
        'budget_ao',
        'date_limit_ao',
        'mantant_soumission_ao',
        'bu_ao',
        'departements_ao',
        'departements_part',
        'partenaires_ao',
        'partenaires_part',
        'soustraitants_ao',
        'soustraitants_part',
        'responsable_ao',
        'adjudication_ao',
        'date_adjudication_ao',
        'motif_ao',
        'rejet_ao',
        'adjudicataire_ao',
        'mantant_moins_ao',
        'archived',
    ];
}


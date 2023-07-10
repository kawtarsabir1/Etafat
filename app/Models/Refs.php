<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refs extends Model
{
    protected $primaryKey = 'ID_Ref';

    protected $fillable = [
        'client',
        'objet',
        'attestation',
        'archived',
        'mantant',
        'montantTraveaux',
        'nMarche',
        'categories',
        'fiche',
        'ficheExist',
        'logo',
        'localisation',
        'nRef',
        'nIntern',
        'societe',
        'missions',
        'description',
        'groupement',
        'part',
        'annee'
    ];

    use HasFactory;
}

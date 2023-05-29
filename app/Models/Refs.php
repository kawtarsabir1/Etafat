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
        'nMarche',
        'category',
        'fiche',
        'nRef',
        'societe',
        'missions',
        'description',
        'annee'
    ];

    use HasFactory;
}

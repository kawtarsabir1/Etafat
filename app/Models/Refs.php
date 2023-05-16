<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refs extends Model
{
    protected $primaryKey = 'ID_Ref';

    protected $fillable = [
        'employeur',
        'poste',
        'dateDebut',
        'dateFin',
        'ID_Salarie'
    ];

    use HasFactory;
}

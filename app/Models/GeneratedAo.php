<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneratedAo extends Model
{
    use HasFactory;

    protected $fillable = [
        'ao_nom',
        'modele',
        'langue',
    ];
}

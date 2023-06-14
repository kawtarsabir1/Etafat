<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Busunit extends Model
{
    use HasFactory;

    protected $table = 'busunits';

    protected $fillable = [
        'buNom',
    ];
}

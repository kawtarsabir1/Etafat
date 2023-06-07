<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rh extends Model
{
    use HasFactory;

    protected $fillable = [
        'rhNom',
        'created_at',
        'updated_at',
    ];
}

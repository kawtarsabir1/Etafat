<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taches extends Model
{
    use HasFactory;

    protected $primaryKey = 'ID_Tache';

    protected $fillable = [
        'tache',
        'ID_Ref'
    ];

    public function ref()
    {
        return $this->belongsTo('Refs', 'ID_Ref');
    }
}

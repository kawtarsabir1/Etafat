<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $table = 'projets';

    protected $primaryKey = 'ID_Projet';

    protected $fillable = [
        'ID_Salarie',
        'ID_reference',
        'poste',
        'missions',
        'description',
    ];

    public function salarie()
    {
        return $this->belongsTo('informations', 'ID_Salarie');
    }
}

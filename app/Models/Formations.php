<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Formations extends Model
{
    protected $table = 'formations';

    protected $primaryKey = 'ID_Formation';

    protected $fillable = [
        'ID_Salarie',
        'intitule',
        'etablissement',
        'obtention',
        'diplome'
    ];

    public function salarie()
    {
        return $this->belongsTo('informations', 'ID_Salarie');
    }
}

<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    protected $table = 'experiences';

    protected $primaryKey = 'ID_Experience';

    protected $fillable = [
        'ID_Salarie',
        'employeur',
        'poste',
        'pay',
        'dateDebut',
        'dateFin',
        'attestation'
    ];

    public function salarie()
    {
        return $this->belongsTo('informations', 'ID_Salarie');
    }
}

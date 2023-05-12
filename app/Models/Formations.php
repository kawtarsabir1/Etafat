<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Formations extends Model
{
    protected $table = 'Formations';

    protected $primaryKey = 'ID_Formation';

    protected $fillable = [
        'ID_Salarie',
        'IntituleFormation',
        'EtablissementFormation',
        'DateDebut',
        'DateFin',
        'Lieu',
        'AttestationDiplome'
    ];

    public function salarie()
    {
        return $this->belongsTo('InformationsGenerales', 'ID_Salarie');
    }
}

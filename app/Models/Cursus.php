<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Cursus extends Model
{
    protected $table = 'Cursus';

    protected $primaryKey = 'ID_Cursus';

    protected $fillable = [
        'ID_Salarie',
        'NiveauEtudes',
        'IntituleDiplome',
        'AnneeObtention',
        'DateDebut',
        'DateFin',
        'EtablissementScolaire',
        'PaysEtablissementScolaire',
        'Diplome'
    ];

    public function salarie()
    {
        return $this->belongsTo('InformationsGenerales', 'ID_Salarie');
    }
}



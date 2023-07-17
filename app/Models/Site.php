<?php

namespace App\Models;

use DateTimeInterface;
use App\Traits\Auditable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Site extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'sites';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $hidden = ['geom'];
    protected $fillable = [
        "code",
        "code_patrimoine",
        "n_convention",
        "denomination",
        "adresse",
        "superficie",
        "type_detention",
        "geom",
        "region_bam_id",
        "region_postale_id",
        "commune_id",
        "proprietaire",
        "bailleur",
        "monument_historique",
        "categorie_batiment",
        "superficie_total",
        "superficie_batie",
        "superficie_plancher",
        "superficie_terrain",
        "sub",
        "sun",
        "shob",
        "shon",
        "superficie_louee",
        "hauteur",
        "carnet_sante",
        'provisoir',
    ];


    public const MODEL_STRUCTURE = [
        'fields' => [
            'denomination',
            'adresse',
        ],
        'with'=>[]
    ];


    public const TYPE_DETENTION = [
        'autre' => 'Autre',
        'location' => 'Location',
        'proprieté' => 'Proprieté',
    ];

    public const CATEGORIE_BATIMENT = [
        'ERP' => 'ERP',
        'ERT' => 'ERT', 
    ];
        
    public const CARNET_SANTE = [
        'Bon état' => 'Bon état',
        'état moyenne' => 'état moyenne', 
        'délabré' => 'délabré', 
        'en ruine' => 'en ruine', 
    ];
    

    

    public function getTransFields($field)
    {
        return "models.site.fields.".$field;
    }


    public function terrains()
    {
        return $this->hasMany(Terrain::class, 'site_id', 'id');
    }

    public function batiments()
    {
        return $this->hasMany(Batiment::class, 'site_id', 'id');
    }

    public function locals()
    {
        return $this->hasMany(Local::class, 'site_id', 'id');
    }

    public function equipements()
    {
        return $this->hasMany(Equipement::class, 'site_id', 'id');
    }

    public function etages()
    {
        return $this->hasMany(Etage::class, 'site_id', 'id');
    }



    public function getDateAcquisitionAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateAcquisitionAttribute($value)
    {
        $this->attributes['date_acquisition'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }


    /**
     * Get the region_bam that owns the Site
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region_bam(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(RegionBam::class, 'region_bam_id');
    }


    /**
     * Get the  that owns the Site
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region_postale(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(RegionPostale::class, 'region_postale_id');
    }


    /**
     * Get the region_postale that owns the Site
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function commune(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Commune::class, 'commune_id');
    }
 

    public function projets()
    {
        return $this->HasMany(\Modules\Armoire\Entities\Projet::class, "site_id");
    }

    //Themes 
    public function location_immobilier()
    {
        return $this->hasMany(Theme\LocationImmobilier::class, 'site_id', 'id');
    }

    public function convention_mades()
    {
        return $this->HasMany(Theme\ConventionMade::class, "site_id");
    }
    
    public function demande_convention_mades()
    {
        return $this->HasMany(Theme\NouvelleConventionMade::class, "site_id");
    }

        
    public function sous_locations()
    {
        return $this->HasMany(Theme\SousLocation::class, "site_id");
    }

    public function contrats()
    {
        return $this->HasMany(Theme\Contrat::class, "site_id");
    }

    public function bailleurs()
    {
        return $this->HasMany(Theme\Bailleur::class, "site_id");
    }

    public function bailleur_initials()
    {
        return $this->HasMany(Theme\BailleurInitial::class, "site_id");
    }

    public function heritiers()
    {
        return $this->HasMany(Theme\Heritier::class, "site_id");
    }

    
    public function resiliation_made()
    {
        return $this->HasMany(Theme\ResiliationMade::class, "site_id");
    }

    public function tsc_depense()
    {
        return $this->HasMany(Theme\TscDepense::class, "site_id");
    }

    public function etat_paiement()
    {
        return $this->HasMany(Theme\EtatPaiement::class, "site_id");
    }
    
    public function engagements()
    {
        return $this->HasMany(Theme\Engagement::class, "site_id");
    }
    
}

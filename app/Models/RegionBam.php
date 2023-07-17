<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\belongsToMany;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class RegionBam extends Model
{
    use HasFactory;

    protected $fillables = ["nom"];

    /**
     * Get all of the users for the RegionBam
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function users(): belongsToMany
    {
        return $this->belongsToMany(User::class, 'user_regionbam');
    }

    /**
     * Get all of the sites for the RegionBam
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sites(): HasMany
    {
        return $this->hasMany(Site::class);
    }
}

<?php

namespace Modules\Setting\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Setting\Database\factories\MenuFactory;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'url',
        'parent_id'
    ];
    
    protected static function newFactory()
    {
        return MenuFactory::new();
    }
}

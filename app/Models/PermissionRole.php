<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    use HasFactory;

    public $table = 'permission_role';

    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = [
        'permission_id',
        'role_id',
        'created_at',
        'updated_at'
    ];

    public function permission()
    {
        return $this->belongsTo(Permission::class, 'permission_id');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}

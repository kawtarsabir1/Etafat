<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = "clients";

    protected $fillable = [
        "ste",
        "nature",
        "type",
        "adresse",
        "tel",
        "email",
        "fax",
        "site",
        "ice",
        "rc",
        "patente",
        "cnss",
        "if",
        "rib",
        "capital",
        "client"
    ];
}

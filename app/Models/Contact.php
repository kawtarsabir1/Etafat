<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = "contacts";

    protected $fillable = [
        "client_id",
        "nom",
        "prenom",
        "fonction",
        "tel",
        "email"
    ];
}
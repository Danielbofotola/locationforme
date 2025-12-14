<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
     use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'phone',
        'date_reservation',
        'heure_debut',
        'heure_fin',
        'nombre_participants',
        'prix_total',
    ];
}

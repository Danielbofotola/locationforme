<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListeReservelocalResource extends Model
{
    /**
     * Table associée au modèle.
     */
    protected $table = 'liste_reservelocal_resources';

    /**
     * Attributs pouvant être remplis en masse.
     */
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

    /**
     * Casts des colonnes.
     */
    protected $casts = [
        'date_reservation'   => 'date',
        'heure_debut'        => 'datetime:H:i',
        'heure_fin'          => 'datetime:H:i',
        'nombre_participants'=> 'integer',
        'prix_total'         => 'decimal:2',
    ];
}

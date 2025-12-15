<?php

namespace App\Http\Controllers;

use App\Models\ListeReservelocalResource;
use App\Models\Reservation;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'nullable|string|max:255',
            'phone' => 'required|string|max:20',
            'date_reservation' => 'required|date',
            'heure_debut' => 'required',
            'heure_fin' => 'required|after:heure_debut',
            'nombre_participants' => 'required|integer|min:1',
            'prix_total' => 'required|numeric|min:0',
        ]);

        // Enregistrement dans la table `reservations`
        $reservation = Reservation::create($validated);

        // Enregistrement dans la table `liste_reservelocal_resources`
        ListeReservelocalResource::create($validated);

        // 🔔 Notification Filament
        Notification::make()
            ->title('Nouvelle réservation')
            ->body(
                'Nouvelle réservation de ' .
                $validated['nom'] .
                ' pour le ' .
                $validated['date_reservation']
            )
            ->success()
            ->send();

        return redirect()->back()->with('success', 'Réservation enregistrée avec succès.');
    }
}

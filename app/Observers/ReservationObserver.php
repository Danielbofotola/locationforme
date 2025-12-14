<?php

namespace App\Observers;

use App\Models\Reservation;
use Filament\Notifications\Notification;

class ReservationObserver
{
    public function created(Reservation $reservation): void
    {
        Notification::make()
            ->title('Nouvelle réservation')
            ->body(
                "Client : {$reservation->nom}\n" .
                "Date : {$reservation->date_reservation}\n" .
                "Heure : {$reservation->heure_debut} - {$reservation->heure_fin}"
            )
            ->success()
            ->send();
    }
}

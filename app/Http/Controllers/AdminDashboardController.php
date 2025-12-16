<?php

namespace App\Http\Controllers;

use App\Models\ListeReservelocalResource;
use App\Models\Reservation;
use App\Models\User;

class AdminDashboardController extends Controller
{
    /**
     * Affiche le tableau de bord admin personnalisé (index.blade.php)
     * avec des données réelles depuis la base de données.
     */
    public function index()
    {
        $reservationsCount = Reservation::count();
        $listeReservelocalCount = ListeReservelocalResource::count();
        $usersCount = User::count();

        // Réservations déjà consommées (date passée ou du jour)
        $consumedReservationsCount = ListeReservelocalResource::whereDate('date_reservation', '<=', now()->toDateString())
            ->count();

        // Réservations en attente (date future)
        $pendingReservationsCount = ListeReservelocalResource::whereDate('date_reservation', '>', now()->toDateString())
            ->count();

        // Réservations prévues aujourd'hui
        $todayReservationsCount = ListeReservelocalResource::whereDate('date_reservation', now()->toDateString())
            ->count();

        // Réservations prévues cette semaine
        $weekReservationsCount = ListeReservelocalResource::whereBetween('date_reservation', [
            now()->startOfWeek()->toDateString(),
            now()->endOfWeek()->toDateString(),
        ])->count();

        // Réservations prévues ce mois-ci
        $monthReservationsCount = ListeReservelocalResource::whereBetween('date_reservation', [
            now()->startOfMonth()->toDateString(),
            now()->endOfMonth()->toDateString(),
        ])->count();

        // Évolution des réservations sur les 7 derniers jours
        $startDate = now()->subDays(6)->toDateString();
        $endDate = now()->toDateString();

        $rawEvolution = ListeReservelocalResource::selectRaw('date_reservation, COUNT(*) as count')
            ->whereBetween('date_reservation', [$startDate, $endDate])
            ->groupBy('date_reservation')
            ->orderBy('date_reservation')
            ->get()
            ->keyBy('date_reservation');

        $reservationsEvolutionLabels = [];
        $reservationsEvolutionValues = [];

        $period = new \DatePeriod(
            new \DateTime($startDate),
            new \DateInterval('P1D'),
            (new \DateTime($endDate))->modify('+1 day'),
        );

        foreach ($period as $date) {
            $key = $date->format('Y-m-d');
            $reservationsEvolutionLabels[] = $date->format('d/m');
            $reservationsEvolutionValues[] = $rawEvolution[$key]->count ?? 0;
        }

        // Dernières réservations pour le tableau du dashboard
        $latestReservations = ListeReservelocalResource::orderByDesc('created_at')
            ->limit(10)
            ->get();

        return view('index', [
            'reservationsCount'          => $reservationsCount,
            'listeReservelocalCount'     => $listeReservelocalCount,
            'usersCount'                 => $usersCount,
            'latestReservations'         => $latestReservations,
            'consumedReservationsCount'  => $consumedReservationsCount,
            'pendingReservationsCount'   => $pendingReservationsCount,
            'todayReservationsCount'     => $todayReservationsCount,
            'weekReservationsCount'      => $weekReservationsCount,
            'monthReservationsCount'     => $monthReservationsCount,
            'reservationsEvolutionLabels'=> $reservationsEvolutionLabels,
            'reservationsEvolutionValues'=> $reservationsEvolutionValues,
        ]);
    }

    /**
     * Supprime une réservation depuis le tableau de bord admin.
     */
    public function destroyReservation(ListeReservelocalResource $reservation)
    {
        $reservation->delete();

        return redirect()
            ->route('admin.template')
            ->with('success', 'Réservation supprimée avec succès.');
    }
}



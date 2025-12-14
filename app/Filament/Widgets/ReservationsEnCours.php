<?php

namespace App\Filament\Widgets;

use App\Models\Reservation;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;

class ReservationsEnCours extends BaseWidget
{
    protected static ?string $heading = 'Réservations en cours (aujourd’hui)';

    protected static ?int $sort = 1;

    protected function getTableQuery(): Builder
    {
        $now = Carbon::now()->format('H:i:s');
        $today = Carbon::today()->toDateString();

        return Reservation::query()
            ->whereDate('date_reservation', $today)
            // use time-aware queries to avoid string-comparison issues
            ->whereTime('heure_debut', '<=', $now)
            ->whereTime('heure_fin', '>=', $now);
            // optionally filter by status if you use a consistent value:
            // ->whereIn('status', ['confirmee', 'confirmée']);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('nom')
                ->label('Client')
                ->searchable()
                ->sortable(),

            Tables\Columns\TextColumn::make('phone')
                ->label('Téléphone'),

            Tables\Columns\TextColumn::make('heure_debut')
                ->label('Début'),

            Tables\Columns\TextColumn::make('heure_fin')
                ->label('Fin'),

            Tables\Columns\TextColumn::make('nombre_participants')
                ->label('Participants')
                ->alignCenter(),

            // Tables\Columns\BadgeColumn::make('status')
            //     ->label('Statut')
            //     ->colors([
            //         'success' => 'confirmee',
            //     ])
            //     ->formatStateUsing(fn () => 'En cours'),

            Tables\Columns\TextColumn::make('prix_total')
                ->label('Prix')
                ->money('USD', true),
        ];
    }
}

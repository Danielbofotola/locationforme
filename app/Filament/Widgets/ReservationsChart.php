<?php

namespace App\Filament\Widgets;

use App\Models\Reservation;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class ReservationsChart extends ChartWidget
{
    protected ?string $heading = 'Réservations par jour';

    protected function getData(): array
    {
        $data = Reservation::select(
                DB::raw('DATE(date_reservation) as date'),
                DB::raw('COUNT(*) as total')
            )
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Nombre de réservations',
                    'data' => $data->pluck('total'),
                ],
            ],
            'labels' => $data->pluck('date'),
        ];
    }

    protected function getType(): string
    {
        return 'line'; // bar | pie | doughnut | line
    }
}

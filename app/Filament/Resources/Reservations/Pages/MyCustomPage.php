<?php

namespace App\Filament\Resources\Reservations\Pages;

use App\Filament\Resources\Reservations\ReservationResource;
use Filament\Resources\Pages\Page;

class MyCustomPage extends Page
{
    protected static string $resource = ReservationResource::class;

    protected string $view = 'filament.resources.reservations.pages.my-custom-page';
}

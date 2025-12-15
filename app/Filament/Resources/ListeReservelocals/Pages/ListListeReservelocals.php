<?php

namespace App\Filament\Resources\ListeReservelocals\Pages;

use App\Filament\Resources\ListeReservelocals\ListeReservelocalResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListListeReservelocals extends ListRecords
{
    protected static string $resource = ListeReservelocalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

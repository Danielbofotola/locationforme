<?php

namespace App\Filament\Resources\ListeReservelocals\Pages;

use App\Filament\Resources\ListeReservelocals\ListeReservelocalResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewListeReservelocal extends ViewRecord
{
    protected static string $resource = ListeReservelocalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}

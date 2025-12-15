<?php

namespace App\Filament\Resources\ListeReservelocals\Pages;

use App\Filament\Resources\ListeReservelocals\ListeReservelocalResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditListeReservelocal extends EditRecord
{
    protected static string $resource = ListeReservelocalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}

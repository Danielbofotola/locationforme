<?php

namespace App\Filament\Resources\ListeReservelocals;

use App\Filament\Resources\ListeReservelocals\Pages\CreateListeReservelocal;
use App\Filament\Resources\ListeReservelocals\Pages\EditListeReservelocal;
use App\Filament\Resources\ListeReservelocals\Pages\ListListeReservelocals;
use App\Filament\Resources\ListeReservelocals\Pages\ViewListeReservelocal;
use App\Filament\Resources\ListeReservelocals\Schemas\ListeReservelocalForm;
use App\Filament\Resources\ListeReservelocals\Schemas\ListeReservelocalInfolist;
use App\Filament\Resources\ListeReservelocals\Tables\ListeReservelocalsTable;
use App\Models\ListeReservelocalResource as ListeReservelocal;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ListeReservelocalResource extends Resource
{
    protected static ?string $model = ListeReservelocal::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'reserve';

    public static function form(Schema $schema): Schema
    {
        return ListeReservelocalForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ListeReservelocalInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ListeReservelocalsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListListeReservelocals::route('/'),
            'create' => CreateListeReservelocal::route('/create'),
            'view' => ViewListeReservelocal::route('/{record}'),
            'edit' => EditListeReservelocal::route('/{record}/edit'),
        ];
    }
}

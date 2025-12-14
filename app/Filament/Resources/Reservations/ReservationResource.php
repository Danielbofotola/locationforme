<?php

namespace App\Filament\Resources\Reservations;

use App\Filament\Resources\Reservations\Pages\CreateReservation;
use App\Filament\Resources\Reservations\Pages\EditReservation;
use App\Filament\Resources\Reservations\Pages\ListReservations;
use Filament\Forms;
use App\Filament\Resources\Reservations\Tables\ReservationsTable;
use App\Models\Reservation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ReservationResource extends Resource
{
    protected static ?string $model = Reservation::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Forms\Components\TextInput::make('nom')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('prenom')
                    ->maxLength(255),

                Forms\Components\TextInput::make('phone')
                    ->required()
                    ->tel(),

                Forms\Components\DatePicker::make('date_reservation')
                    ->required(),

                Forms\Components\TimePicker::make('heure_debut')
                    ->required(),

                Forms\Components\TimePicker::make('heure_fin')
                    ->required()
                    ->after('heure_debut'),

                Forms\Components\TextInput::make('nombre_participants')
                    ->numeric()
                    ->required()
                    ->minValue(1),

                Forms\Components\TextInput::make('prix_total')
                    ->numeric()
                    ->required()
                    ->prefix('$')
                    ->disabled()
                    ->dehydrated(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return ReservationsTable::configure($table);
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
            'index' => ListReservations::route('/'),
            'create' => CreateReservation::route('/create'),
            'edit' => EditReservation::route('/{record}/edit'),
            'my-custom' => Pages\MyCustomPage::route('/my-custom'),
        ];
    }
}


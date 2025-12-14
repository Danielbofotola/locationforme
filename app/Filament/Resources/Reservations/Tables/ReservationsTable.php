<?php

namespace App\Filament\Resources\Reservations\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ReservationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nom')
                    ->label('Nom')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('prenom')
                    ->label('Prénom')
                    ->searchable(),

                TextColumn::make('phone')
                    ->label('Téléphone'),

                TextColumn::make('date_reservation')
                    ->label('Date')
                    ->date()
                    ->sortable(),

                TextColumn::make('heure_debut')
                    ->label('Heure début'),

                TextColumn::make('heure_fin')
                    ->label('Heure fin'),

                TextColumn::make('nombre_participants')
                    ->label('Participants')
                    ->alignCenter(),

                TextColumn::make('prix_total')
                    ->label('Prix')
                    ->money('USD', true)
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Créé')
                    ->since(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

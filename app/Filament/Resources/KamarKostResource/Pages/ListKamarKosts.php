<?php

namespace App\Filament\Resources\KamarKostResource\Pages;

use App\Filament\Resources\KamarKostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKamarKosts extends ListRecords
{
    protected static string $resource = KamarKostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Kamar Kost'),
        ];
    }
}

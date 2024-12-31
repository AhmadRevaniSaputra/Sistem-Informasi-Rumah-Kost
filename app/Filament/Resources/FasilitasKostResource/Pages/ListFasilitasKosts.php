<?php

namespace App\Filament\Resources\FasilitasKostResource\Pages;

use App\Filament\Resources\FasilitasKostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFasilitasKosts extends ListRecords
{
    protected static string $resource = FasilitasKostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Fasilitas Kost')
        ];
    }
}

<?php

namespace App\Filament\Resources\KategoriKostResource\Pages;

use App\Filament\Resources\KategoriKostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKategoriKosts extends ListRecords
{
    protected static string $resource = KategoriKostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

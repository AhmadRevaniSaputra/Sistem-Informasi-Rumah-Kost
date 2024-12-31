<?php

namespace App\Filament\Resources\KeuntunganKostResource\Pages;

use App\Filament\Resources\KeuntunganKostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKeuntunganKosts extends ListRecords
{
    protected static string $resource = KeuntunganKostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('KeuntunganKost'),
        ];
    }
}

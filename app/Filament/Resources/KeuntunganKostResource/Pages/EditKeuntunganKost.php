<?php

namespace App\Filament\Resources\KeuntunganKostResource\Pages;

use App\Filament\Resources\KeuntunganKostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKeuntunganKost extends EditRecord
{
    protected static string $resource = KeuntunganKostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

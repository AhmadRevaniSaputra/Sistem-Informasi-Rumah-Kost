<?php

namespace App\Filament\Resources\PenghuniKostResource\Pages;

use App\Filament\Resources\PenghuniKostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenghuniKost extends EditRecord
{
    protected static string $resource = PenghuniKostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

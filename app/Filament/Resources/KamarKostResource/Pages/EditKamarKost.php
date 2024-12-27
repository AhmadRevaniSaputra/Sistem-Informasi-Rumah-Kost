<?php

namespace App\Filament\Resources\KamarKostResource\Pages;

use App\Filament\Resources\KamarKostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKamarKost extends EditRecord
{
    protected static string $resource = KamarKostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

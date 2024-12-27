<?php

namespace App\Filament\Resources\FasilitasKostResource\Pages;

use App\Filament\Resources\FasilitasKostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFasilitasKost extends EditRecord
{
    protected static string $resource = FasilitasKostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

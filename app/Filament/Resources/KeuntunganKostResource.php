<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KeuntunganKostResource\Pages;
use App\Models\Keuntungan_Kost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;

class KeuntunganKostResource extends Resource
{
    protected static ?string $model = Keuntungan_Kost::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('diskon')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('description')
                    ->maxLength(500),
                   
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('diskon')
                    ->sortable(),
                TextColumn::make('description')
                    ->limit(50),
                TextColumn::make('KategoriKost.name')
                    ->label('Category'),
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKeuntunganKosts::route('/'),
            'create' => Pages\CreateKeuntunganKost::route('/create'),
            'edit' => Pages\EditKeuntunganKost::route('/{record}/edit'),
        ];
    }
}

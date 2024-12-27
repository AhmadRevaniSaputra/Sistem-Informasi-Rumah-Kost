<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FasilitasKostResource\Pages;
use App\Models\fasilitas_Kost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions;
use Filament\Tables\Actions\DeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletes;

class FasilitasKostResource extends Resource
{
    protected static ?string $model = fasilitas_Kost::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->maxLength(500),
                Forms\Components\Select::make('kamar__kost_id')
                    ->relationship('kamar_Kost', 'gambar')
                    ->required(),
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description')
                    ->limit(50),
                TextColumn::make('kamar_Kost.name')
                    ->label('Room'),
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
            'index' => Pages\ListFasilitasKosts::route('/'),
            'create' => Pages\CreateFasilitasKost::route('/create'),
            'edit' => Pages\EditFasilitasKost::route('/{record}/edit'),
        ];
    }
}
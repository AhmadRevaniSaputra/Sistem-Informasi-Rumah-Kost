<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KamarKostResource\Pages;
use App\Models\Kamar_Kost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions;

class KamarKostResource extends Resource
{
    protected static ?string $model = Kamar_Kost::class;
    protected static ?string $navigationIcon = 'heroicon-o-key';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('gambar')
                    ->label('gambar')
                    ->image()
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->maxLength(500),
                Forms\Components\TextInput::make('harga')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('kategori_kost_id')
                    ->relationship('kategoriKost', 'name')
                    ->required(),
                Forms\Components\Toggle::make('is_available')
                    ->label('Available')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(components: [
                ImageColumn::make('gambar')
                    ->label('gambar'),
                TextColumn::make('harga')
                    ->sortable(),
                TextColumn::make('kategoriKost.name')
                    ->label('Category'),
            ])
            ->actions([
                Actions\EditAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKamarKosts::route('/'),
            'create' => Pages\CreateKamarKost::route('/create'),
            'edit' => Pages\EditKamarKost::route('/{record}/edit'),
        ];
    }
}
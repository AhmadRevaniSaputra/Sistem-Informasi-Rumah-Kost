<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransaksiSewaResource\Pages;
use App\Models\Transaksi_Sewa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
class TransaksiSewaResource extends Resource
{
    protected static ?string $model = Transaksi_Sewa::class;
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('total_harga')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('tanggal_mulai')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_selesai')
                    ->required(),
                    Forms\Components\Select::make('kamar__kost_id')
                    ->relationship('kamar_Kost', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kamar_Kost.name')
                    ->label('Room')
                    ->searchable(),
                TextColumn::make('total_harga')
                    ->sortable(),
                TextColumn::make('tanggal_mulai')
                    ->date(),
                TextColumn::make('tanggal_selesai')
                    ->date(),
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
            'index' => Pages\ListTransaksiSewas::route('/'),
            'create' => Pages\CreateTransaksiSewa::route('/create'),
            'edit' => Pages\EditTransaksiSewa::route('/{record}/edit'),
        ];
    }
}

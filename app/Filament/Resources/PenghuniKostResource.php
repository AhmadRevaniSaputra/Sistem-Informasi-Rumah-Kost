<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenghuniKostResource\Pages;
use App\Models\Penghuni_Kost;
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
class PenghuniKostResource extends Resource
{
    protected static ?string $model = Penghuni_Kost::class;
    protected static ?string $navigationIcon = 'heroicon-o-users';

        public static function form(Form $form): Form
        {
            return $form
                ->schema([
                    Forms\Components\TextInput::make('Nama')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('Nomor_Telepon')
                        ->required(),
                    Forms\Components\TextInput::make('email')
                        ->required()
                        ->email(),
                    Forms\Components\Select::make('transaksi_sewa_id')
                        ->relationship('transaksiSewa', 'id')
                        ->required(),
                ]);
        }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Nama')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('Nomor_Telepon'),
                TextColumn::make('email'),
                TextColumn::make('transaksiSewa.id')
                    ->label('Transaction ID'),
            ])
            ->actions([
                EditAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenghuniKosts::route('/'),
            'create' => Pages\CreatePenghuniKost::route('/create'),
            'edit' => Pages\EditPenghuniKost::route('/{record}/edit'),
        ];
    }
}

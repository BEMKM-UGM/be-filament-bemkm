<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelResource\Pages;
use App\Filament\Resources\ArtikelResource\RelationManagers;
use App\Models\Artikel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                ->required(),
            
            Forms\Components\DatePicker::make('tgl_publish')
                ->label('Tanggal Publish'),

            Forms\Components\TextInput::make('dirjen')
                ->label('Dirjen'),

            Forms\Components\RichEditor::make('deskripsi')
                ->label('Deskripsi'),

            Forms\Components\TextInput::make('kementrian')
                ->label('Kementrian'),

            FileUpload::make('gambar')
                ->label('Gambar')
                ->multiple()
                ->directory('gambar')
                ->image() 
                ->maxSize(2048),
            
            Forms\Components\RichEditor::make('referensi')
                ->label('Referensi'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('judul')->label('Judul'),
                Tables\Columns\TextColumn::make('dirjen')->label('Dirjen'),
                Tables\Columns\TextColumn::make('kementrian')->label('Kementerian'),
                Tables\Columns\TextColumn::make('tgl_publish')->label('Tanggal Publish')->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }
}

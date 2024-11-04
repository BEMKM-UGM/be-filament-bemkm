<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DinamikaBersamaResource\Pages;
use App\Models\Dinamika_Bersama;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;

class DinamikaBersamaResource extends Resource
{
    protected static ?string $model = Dinamika_Bersama::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->required()
                    ->label('Judul'),

                FileUpload::make('poster')
                    ->label('Poster')
                    ->image()
                    ->directory('poster')
                    ->nullable(),

                TextInput::make('pelaksana')
                    ->required()
                    ->label('Pelaksana'),

                Select::make('peruntukan')
                    ->label('Peruntukan')
                    ->options([
                        'Umum' => 'Umum',
                        'Mahasiswa UGM' => 'Mahasiswa UGM',
                        'Staff BEM' => 'Staff BEM',
                    ])
                    ->required(),

                RichEditor::make('deskripsi')
                    ->label('Deskripsi')
                    ->nullable(),

                DatePicker::make('tgl_buka')
                    ->label('Tanggal Buka')
                    ->nullable(),

                DatePicker::make('tgl_tutup')
                    ->label('Tanggal Tutup')
                    ->nullable(),

                TextInput::make('buku_panduan')
                    ->label('Buku Panduan')
                    ->url()
                    ->nullable(),

                TextInput::make('link_pendaftaran')
                    ->label('Link Pendaftaran')
                    ->url()
                    ->nullable(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('judul')->label('Judul'),
                Tables\Columns\TextColumn::make('pelaksana')->label('Pelaksana'),
                Tables\Columns\TextColumn::make('peruntukan')->label('Peruntukan'),
                Tables\Columns\TextColumn::make('tgl_buka')->label('Tanggal Buka')->date(),
                Tables\Columns\TextColumn::make('tgl_tutup')->label('Tanggal Tutup')->date(),
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
            'index' => Pages\ListDinamikaBersamas::route('/'),
            'create' => Pages\CreateDinamikaBersama::route('/create'),
            'edit' => Pages\EditDinamikaBersama::route('/{record}/edit'),
        ];
    }
}

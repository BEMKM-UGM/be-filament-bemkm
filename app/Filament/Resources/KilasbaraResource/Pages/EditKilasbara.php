<?php

namespace App\Filament\Resources\KilasbaraResource\Pages;

use App\Filament\Resources\KilasbaraResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKilasbara extends EditRecord
{
    protected static string $resource = KilasbaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

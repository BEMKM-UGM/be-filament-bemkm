<?php

namespace App\Filament\Resources\KilasbaraResource\Pages;

use App\Filament\Resources\KilasbaraResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKilasbaras extends ListRecords
{
    protected static string $resource = KilasbaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

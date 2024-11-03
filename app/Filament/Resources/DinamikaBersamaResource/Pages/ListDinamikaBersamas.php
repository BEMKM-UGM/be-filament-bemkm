<?php

namespace App\Filament\Resources\DinamikaBersamaResource\Pages;

use App\Filament\Resources\DinamikaBersamaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDinamikaBersamas extends ListRecords
{
    protected static string $resource = DinamikaBersamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

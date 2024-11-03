<?php

namespace App\Filament\Resources\DinamikaBersamaResource\Pages;

use App\Filament\Resources\DinamikaBersamaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDinamikaBersama extends EditRecord
{
    protected static string $resource = DinamikaBersamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

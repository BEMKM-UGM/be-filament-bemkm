<?php
namespace App\Filament\Resources\DinamikaBersamaResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\DinamikaBersamaResource;
use Illuminate\Routing\Router;


class DinamikaBersamaApiService extends ApiService
{
    protected static string | null $resource = DinamikaBersamaResource::class;

    public static function handlers() : array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class
        ];

    }
}

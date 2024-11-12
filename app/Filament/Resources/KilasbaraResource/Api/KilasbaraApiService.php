<?php
namespace App\Filament\Resources\KilasbaraResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\KilasbaraResource;
use Illuminate\Routing\Router;


class KilasbaraApiService extends ApiService
{
    protected static string | null $resource = KilasbaraResource::class;

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

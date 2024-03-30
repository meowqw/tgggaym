<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use App\Http\Resources\LocationObject\LocationObjectListResource;
use App\Services\Api\LocationObject\LocationObjectService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class LocationObjectController extends Controller
{
    public function __construct(public LocationObjectService $service)
    {
    }

    /**
     * Получить объекты локации по id локации
     *
     * @param int $locationId
     * @return AnonymousResourceCollection
     */
    public function index(int $locationId): AnonymousResourceCollection
    {
        return LocationObjectListResource::collection($this->service->getLocationObjects($locationId));
    }
}

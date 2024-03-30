<?php

namespace App\Http\Controllers\Location;

use App\Exceptions\Api\ApiExceptionWithMessage;
use App\Http\Controllers\Controller;
use App\Http\Resources\Location\AvailableLocationListResource;
use App\Http\Resources\Location\LocationResource;
use App\Services\Api\Location\LocationService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class LocationController extends Controller
{
    public function __construct(public LocationService $service)
    {
    }

    /**
     * Получить список доступных локаций
     *
     * @return AnonymousResourceCollection
     */
    public function getAvailableLocations(): AnonymousResourceCollection
    {
        return AvailableLocationListResource::collection($this->service->getAvailableLocations());
    }

    /**
     * Получить конуретную локацию
     *
     * @param int $id
     * @return LocationResource
     * @throws ApiExceptionWithMessage
     */
    public function show(int $id): LocationResource
    {
        return new LocationResource($this->service->getLocationById($id));
    }
}

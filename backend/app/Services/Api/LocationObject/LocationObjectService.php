<?php

namespace App\Services\Api\LocationObject;

use App\Models\Location\LocationObject;
use Illuminate\Database\Eloquent\Collection;

class LocationObjectService
{
    /**
     * Получить объекты локации по id
     *
     * @param int $locationId
     * @return Collection|array
     */
    public function getLocationObjects(int $locationId): Collection|array
    {
        return LocationObject::query()->where('location_id', $locationId)->get();
    }
}

<?php

namespace App\Services\Api\Location;

use App\Exceptions\Api\ApiExceptionWithMessage;
use App\Models\Location\Location;
use App\Services\Location\Api;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class LocationService
{
    /**
     * Получить список доступныз локаций
     *
     * @return Collection
     */
    public function getAvailableLocations(): Collection
    {
        return Location::all();
    }

    /**
     * Получить локацию по id
     *
     * @param int $id
     * @return Model|Collection|Builder|array|null
     * @throws ApiExceptionWithMessage
     */
    public function getLocationById(int $id): Model|Collection|Builder|array|null
    {
        $location = Location::query()->find($id);
        if ($location === null) {
            throw new ApiExceptionWithMessage('Нет данных', 400);
        }
        return $location;
    }
}

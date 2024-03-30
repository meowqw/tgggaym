<?php

namespace App\Http\Resources\Location;

use App\Models\Location\Location;
use Illuminate\Http\Resources\Json\JsonResource;

class LocationResource extends JsonResource
{
    /** @var $resource Location */
    public $resource;

    /**
     * @param $request
     * @return string[]
     */
    public function toArray($request): array
    {
        parent::toarray($request);
        return [
            /** @var int $id */
            'id' => $this->resource->getId(),
            /** @var string $name */
            'name' => $this->resource->getName(),
            /** @var string $code */
            'type' => $this->resource->getType(),
            /** @var string $asset asset img path */
            'assetPath' => $this->resource->getAssetPath()
        ];
    }

}

<?php

namespace App\Http\Resources\Faction;

use App\Models\CharacterAppearance\Faction;
use Illuminate\Http\Resources\Json\JsonResource;

class FactionListResource extends JsonResource
{
    /** @var $resource Faction */
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
            'code' => $this->resource->getCode(),
            /** @var string $desctiption */
            'description' => $this->resource->getDescription(),
            /** @var string $asset asset img path */
            'assetPath' => $this->resource->getAssetPath()
        ];
    }

}

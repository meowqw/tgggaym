<?php

namespace App\Http\Resources\GameInterface;

use App\Models\GameInterface\MenuItem;
use Illuminate\Http\Resources\Json\JsonResource;

class MenuItemResource extends JsonResource
{
    /** @var $resource MenuItem */
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
            /** @var string $asset asset img path */
            'assetPath' => $this->resource->getAssetPath()
        ];
    }

}

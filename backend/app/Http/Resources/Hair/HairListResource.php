<?php

namespace App\Http\Resources\Hair;

use App\Models\CharacterAppearance\Gender;
use App\Models\CharacterAppearance\Hair;
use Illuminate\Http\Resources\Json\JsonResource;
class HairListResource extends JsonResource
{
    /** @var $resource Hair */
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
            'code' => $this->resource->getCode()
        ];
    }

}

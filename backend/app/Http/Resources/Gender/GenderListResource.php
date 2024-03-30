<?php

namespace App\Http\Resources\Gender;

use App\Models\CharacterAppearance\Gender;
use Illuminate\Http\Resources\Json\JsonResource;
class GenderListResource extends JsonResource
{
    /** @var $resource Gender */
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

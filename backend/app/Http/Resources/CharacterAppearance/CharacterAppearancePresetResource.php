<?php

namespace App\Http\Resources\CharacterAppearance;

use App\Models\CharacterAppearance\CharacterAppearancePreset;
use Illuminate\Http\Resources\Json\JsonResource;

class CharacterAppearancePresetResource extends JsonResource
{
    /** @var $resource CharacterAppearancePreset */
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
            /** @var int $factionId */
            'factionId' => $this->resource->getFactionId(),
            /** @var int $genderId */
            'genderId' => $this->resource->getGenderId(),
            /** @var int $hairId */
            'hairId' => $this->resource->getHairId(),
            /** @var int $hairColorId */
            'hairColorId' => $this->resource->getHairColorId(),
            /** @var string $assetPath asset img path */
            'assetPath' => $this->resource->getAssetPath()
        ];
    }

}

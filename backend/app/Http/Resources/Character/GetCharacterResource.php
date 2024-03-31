<?php

namespace App\Http\Resources\Character;

use App\Models\Character\Character;
use App\Models\CharacterAppearance\CharacterAppearance;
use Illuminate\Http\Resources\Json\JsonResource;

class GetCharacterResource extends JsonResource
{
    /** @var $resource Character */
    public $resource;

    /**
     * @param $request
     * @return string[]
     */
    public function toArray($request): array
    {
        parent::toarray($request);
        /** @var CharacterAppearance $appearance */
        $appearance = $this->resource->getAppearance();
        return [
            /** @var int $id */
            'id' => $this->resource->getId(),
            /** @var string $name */
            'name' => $this->resource->getName(),
            /** @var float $balance */
            'balance' => $this->resource->getBalance(),
            /** @var float $experience */
            'experience' => $this->resource->getExperience(),
            /** @var float $hp */
            'hp' => $this->resource->getHp(),
            /** @var float $valor */
            'valor' => $this->resource->getValor(),
            'appearance' => [
                'assetPath' => $appearance->getAssetPath(),
            ]

        ];
    }

}

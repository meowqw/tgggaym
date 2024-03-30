<?php

namespace App\Services\Api\CharacterAppearance;

use App\Data\DTO\Character\CreateCharacterDTO;
use App\Data\DTO\CharacterAppearance\GetPresetDTO;
use App\Exceptions\Api\ApiExceptionWithMessage;
use App\Models\CharacterAppearance\CharacterAppearance;
use App\Models\CharacterAppearance\CharacterAppearancePreset;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class CharacterAppearancePresetService
{
    /**
     * Получить пресет
     *
     * @throws ApiExceptionWithMessage
     */
    public function getPreset(GetPresetDTO|CreateCharacterDTO $DTO): Model|Builder
    {
        $preset = CharacterAppearancePreset::query()
            ->where('gender_id', $DTO->getGenderId())
            ->where('faction_id', $DTO->getFactionId())
            ->where('hair_id', $DTO->getHairId())
            ->where('hair_color_id', $DTO->getHairColorId())->first();

        if ($preset === null) {
            throw new ApiExceptionWithMessage('Нет данных', 400);
        }

        return $preset;
    }

    /**
     * Создание внешнего вида персонажа
     *
     * @throws ApiExceptionWithMessage
     */
    public function create(CreateCharacterDTO $DTO): CharacterAppearance
    {
        /** @var CharacterAppearancePreset $preset */
        $preset = $this->getPreset($DTO);

        $characterAppearance = (new CharacterAppearance())
            ->setAsset($preset->getAsset())
            ->setFactionId($preset->getFactionId())
            ->setGenderId($preset->getGenderId())
            ->setHairId($preset->getHairId())
            ->setHairColorId($preset->getHairColorId());
        $characterAppearance->save();
        return $characterAppearance;
    }
}

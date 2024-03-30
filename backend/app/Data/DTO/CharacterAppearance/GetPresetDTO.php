<?php

namespace App\Data\DTO\CharacterAppearance;

/**
 * @property int $genderId
 * @property int $factionId
 * @property int $hairId
 * @property int $hairColorId
 */
class GetPresetDTO
{
    public function __construct(
        protected int $factionId,
        protected int $genderId,
        protected int $hairId,
        protected int $hairColorId)
    {
    }

    /**
     * @return int
     */
    public function getFactionId(): int
    {
        return $this->factionId;
    }

    /**
     * @return int
     */
    public function getGenderId(): int
    {
        return $this->genderId;
    }

    /**
     * @return int
     */
    public function getHairId(): int
    {
        return $this->hairId;
    }

    /**
     * @return int
     */
    public function getHairColorId(): int
    {
        return $this->hairColorId;
    }
}

<?php

namespace App\Models\CharacterAppearance;

use App\Traits\Model\WithAssetColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $hair_id
 * @property int $hair_color_id
 * @property int $gender_id
 * @property int $faction_id
 */
class CharacterAppearancePreset extends Model
{
    use HasFactory;
    use WithAssetColumn;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return CharacterAppearancePreset
     */
    public function setId(int $id): CharacterAppearancePreset
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getHairId(): int
    {
        return $this->hair_id;
    }

    /**
     * @param int $hairId
     * @return CharacterAppearancePreset
     */
    public function setHairId(int $hairId): CharacterAppearancePreset
    {
        $this->hair_id = $hairId;
        return $this;
    }

    /**
     * @return int
     */
    public function getHairColorId(): int
    {
        return $this->hair_color_id;
    }

    /**
     * @param int $hairColorId
     * @return CharacterAppearancePreset
     */
    public function setHairColorId(int $hairColorId): CharacterAppearancePreset
    {
        $this->hair_color_id = $hairColorId;
        return $this;
    }

    /**
     * @return int
     */
    public function getGenderId(): int
    {
        return $this->gender_id;
    }

    /**
     * @param int $genderId
     * @return CharacterAppearancePreset
     */
    public function setGenderId(int $genderId): CharacterAppearancePreset
    {
        $this->gender_id = $genderId;
        return $this;
    }

    /**
     * @return int
     */
    public function getFactionId(): int
    {
        return $this->faction_id;
    }

    /**
     * @param int $factionId
     * @return CharacterAppearancePreset
     */
    public function setFactionId(int $factionId): CharacterAppearancePreset
    {
        $this->faction_id = $factionId;
        return $this;
    }
}

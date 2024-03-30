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
 * @property string $asset
 *
 * @property-read Hair $hair
 * @property-read HairColor $hairColor
 * @property-read Gender $gender
 * @property-read Faction $faction
 */
class CharacterAppearance extends Model
{
    use HasFactory;
    use WithAssetColumn;

    /**
     * @return int
     */
    public function getHairId(): int
    {
        return $this->hair_id;
    }

    /**
     * @param int $hairId
     * @return CharacterAppearance
     */
    public function setHairId(int $hairId): CharacterAppearance
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
     * @param int $chairColorId
     * @return CharacterAppearance
     */
    public function setHairColorId(int $chairColorId): CharacterAppearance
    {
        $this->hair_color_id = $chairColorId;
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
     * @return CharacterAppearance
     */
    public function setGenderId(int $genderId): CharacterAppearance
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
     * @return CharacterAppearance
     */
    public function setFactionId(int $factionId): CharacterAppearance
    {
        $this->faction_id = $factionId;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return CharacterAppearance
     */
    public function setId(int $id): CharacterAppearance
    {
        $this->id = $id;
        return $this;
    }
}

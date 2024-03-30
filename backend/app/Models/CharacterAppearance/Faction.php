<?php

namespace App\Models\CharacterAppearance;

use App\Traits\Model\WithAssetColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $asset
 * @property int $gender_id
 */
class Faction extends Model
{
    use HasFactory;
    use WithAssetColumn;

    protected $guarded = ['id'];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Faction
     */
    public function setId(int $id): Faction
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Faction
     */
    public function setDescription(string $description): Faction
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Faction
     */
    public function setName(string $name): Faction
    {
        $this->name = $name;
        return $this;
    }
}

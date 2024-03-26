<?php

namespace App\Models\Location;

use App\Traits\Model\WithAssetColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $asset
 * @property int $location_id
 */
class LocationObject extends Model
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
     * @return LocationObject
     */
    public function setId(int $id): LocationObject
    {
        $this->id = $id;
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
     * @return LocationObject
     */
    public function setName(string $name): LocationObject
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return LocationObject
     */
    public function setType(string $type): LocationObject
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return int
     */
    public function getLocationId(): int
    {
        return $this->location_id;
    }

    /**
     * @param int $locationId
     * @return LocationObject
     */
    public function setLocationId(int $locationId): LocationObject
    {
        $this->location_id = $locationId;
        return $this;
    }
}

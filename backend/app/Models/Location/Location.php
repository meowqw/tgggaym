<?php

namespace App\Models\Location;

use App\Traits\Model\WithAssetColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string $name
 * @property string $type
 * @property string $asset
 */
class Location extends Model
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
     * @return Location
     */
    public function setId(int $id): Location
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
     * @return Location
     */
    public function setName(string $name): Location
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
     * @return Location
     */
    public function setType(string $type): Location
    {
        $this->type = $type;
        return $this;
    }
}

<?php

namespace App\Models\GameInterface;

use App\Traits\Model\WithAssetColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $asset
 */
class MenuItem extends Model
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
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return MenuItem
     */
    public function setCode(string $code): MenuItem
    {
        $this->code = $code;
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
     * @return MenuItem
     */
    public function setName(string $name): MenuItem
    {
        $this->name = $name;
        return $this;
    }
}

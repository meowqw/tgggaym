<?php

namespace App\Models\Character;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $hex
 */
class HairColor extends Model
{
    use HasFactory;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return HairColor
     */
    public function setName(string $name): HairColor
    {
        $this->name = $name;
        return $this;
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
     * @return HairColor
     */
    public function setCode(string $code): HairColor
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getHex(): string
    {
        return $this->hex;
    }

    /**
     * @param string $hex
     * @return HairColor
     */
    public function setHex(string $hex): HairColor
    {
        $this->hex = $hex;
        return $this;
    }
}

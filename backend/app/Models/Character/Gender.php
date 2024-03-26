<?php

namespace App\Models\Character;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $code
 */
class Gender extends Model
{
    use HasFactory;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Gender
     */
    public function setId(int $id): Gender
    {
        $this->id = $id;
        return $this;
    }
}

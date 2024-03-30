<?php

namespace App\Models\CharacterAppearance;

use App\Traits\Model\WithAssetColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $code
 * @property string $asset
 */
class Hair extends Model
{
    use HasFactory;
    use WithAssetColumn;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return Hair
     */
    public function setCode(string $code): Hair
    {
        $this->code = $code;
        return $this;
    }
}

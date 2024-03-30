<?php

namespace App\Services\Api\CharacterAppearance;

use App\Models\CharacterAppearance\Hair;
use App\Models\CharacterAppearance\HairColor;
use Illuminate\Database\Eloquent\Collection;

class HairService
{
    /**
     * @return Collection
     */
    public function getHairs(): Collection
    {
        return Hair::all();
    }

    /**
     * @return Collection
     */
    public function getHairColors(): Collection
    {
        return HairColor::all();
    }
}

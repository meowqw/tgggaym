<?php

namespace App\Services\Api\CharacterAppearance;

use App\Models\CharacterAppearance\Gender;
use Illuminate\Database\Eloquent\Collection;

class GenderService
{
    /**
     * @return Collection
     */
    public function getGenders(): Collection
    {
        return Gender::all();
    }
}

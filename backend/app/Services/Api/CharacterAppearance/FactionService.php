<?php

namespace App\Services\Api\CharacterAppearance;

use App\Models\CharacterAppearance\Faction;
use Illuminate\Database\Eloquent\Collection;

class FactionService
{
    /**
     * Получить фракции
     *
     * @return Collection
     */
    public function getFactions(): Collection
    {
        return Faction::query()->get();
    }
}

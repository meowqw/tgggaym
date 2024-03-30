<?php

namespace App\Traits\Model;

use App\Models\CharacterAppearance\CharacterAppearance;
use App\Models\CharacterAppearance\CharacterAppearancePreset;
use App\Models\CharacterAppearance\Faction;
use App\Models\GameInterface\MenuItem;
use App\Models\Location\Location;
use App\Models\Location\LocationObject;

trait WithAssetColumn
{
    /**
     * @return string
     */
    public function getAsset(): string
    {
        return $this->asset;
    }

    /**
     * @param string $asset
     * @return Faction|CharacterAppearance|CharacterAppearancePreset|MenuItem|Location|LocationObject|WithAssetColumn
     */
    public function setAsset(string $asset):  self
    {
        $this->asset = $asset;
        return $this;
    }

    public function getAssetPath(): string
    {
        return url('/storage/'. $this->getAsset());
    }

}

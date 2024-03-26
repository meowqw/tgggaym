<?php

namespace App\Traits\Model;

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
     * @return void
     */
    public function setAsset(string $asset): void
    {
        $this->asset = $asset;
    }

}

<?php

namespace App\Http\Controllers\CharacterAppearance;

use App\Exceptions\Api\ApiExceptionWithMessage;
use App\Http\Requests\CharacterAppearance\GetCharacterAppearancePresetRequest;
use App\Http\Resources\CharacterAppearance\CharacterAppearancePresetResource;
use App\Services\Api\CharacterAppearance\CharacterAppearancePresetService;

class CharacterAppearancePresetController
{
    public function __construct(public CharacterAppearancePresetService $service)
    {
    }

    /**
     * Получить пресет персонажа по фракции, волосам, полу, цвету волос
     *
     * @param GetCharacterAppearancePresetRequest $request
     * @return CharacterAppearancePresetResource
     * @throws ApiExceptionWithMessage
     */
    public function getPreset(GetCharacterAppearancePresetRequest $request): CharacterAppearancePresetResource
    {
        return new CharacterAppearancePresetResource($this->service->getPreset($request->getData()));
    }

}

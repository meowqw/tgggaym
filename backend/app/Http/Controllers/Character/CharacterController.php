<?php

namespace App\Http\Controllers\Character;

use App\Exceptions\Api\ApiExceptionWithMessage;
use App\Http\Controllers\Controller;
use App\Http\Requests\Character\CreateCharacterRequest;
use App\Http\Resources\Character\GetCharacterResource;
use App\Http\Resources\Common\JustBoolResource;
use App\Services\Api\Character\CharacterService;
use Illuminate\Support\Facades\Auth;

class CharacterController extends Controller
{
    public function __construct(public CharacterService $service)
    {
    }

    /**
     * Получить персонажа
     *
     * @return GetCharacterResource
     * @throws ApiExceptionWithMessage
     */
    public function show(): GetCharacterResource
    {
        return new GetCharacterResource($this->service->getCharacter(Auth::id()));
    }

    /**
     * Создание персонажа
     *
     * @param CreateCharacterRequest $request
     * @return JustBoolResource
     * @throws ApiExceptionWithMessage
     */
    public function store(CreateCharacterRequest $request): JustBoolResource
    {
        return new JustBoolResource($this->service->createCharacter(Auth::id(), $request->getData()));
    }
}

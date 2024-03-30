<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\TelegramGetTokenRequest;
use App\Http\Resources\Auth\GetTokenResource;
use App\Services\Api\Auth\Token\LoginTokenService;
use Exception;

class TokenController extends Controller
{
    public function __construct(public LoginTokenService $service)
    {
    }

    /**
     * Получить токен для авторизации Bearer
     *
     * @param TelegramGetTokenRequest $request
     * @return GetTokenResource
     * @throws Exception
     */
    public function store(TelegramGetTokenRequest $request): GetTokenResource
    {
        return new GetTokenResource($this->service->getToken($request->getData()));
    }

}

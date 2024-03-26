<?php

namespace App\Services\Auth\Token;

use App\Data\DTO\Auth\TelegramUserDataDTO;
use App\Models\User;
use App\Services\Auth\Register\RegisterService;
use App\Services\Auth\Register\TelegramRegisterService;
use Exception;

class LoginTokenService
{
    public RegisterService $registerService;
    public function __construct(RegisterService $registerService)
    {
        $this->registerService = $registerService;
    }

    /**
     * Генерация токена для доступа к клиенту
     * Токен связан с tgId
     *
     * @param TelegramUserDataDTO $DTO
     * @return string
     * @throws Exception
     */
    public function getToken(TelegramUserDataDTO $DTO): string
    {
        /** @var User $user */
        $user = User::query()->where('tg_id', $DTO->getTgId())->first();

        if (is_null($user)) {
            $this->registerService->setStrategy(new TelegramRegisterService());
            $user = $this->registerService->register($DTO);
        }

        $user->setLastLogin(now());
        $user->save();

        return $this->saveToken($user->getTgId());
    }

    /**
     * Запись токена в кэш
     *
     * @param int $tgId
     * @return string
     * @throws Exception
     */
    public function saveToken(int $tgId): string
    {
        /** @var User $user */
        $user = User::query()->where('tg_id', $tgId)->first();

        if (is_null($user)) {
            throw new Exception('Пользователь с таким tgId не найден');
        }

        $user->createToken('token')->plainTextToken;

        return $user->createToken('token')->plainTextToken;
    }
}

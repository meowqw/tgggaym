<?php

namespace App\Services\Auth\Register;

use App\Models\User;
use App\Services\Auth\DTO\TelegramUserDataDTO;

class TelegramRegisterService implements RegisterStrategy
{
    /**
     * Регистрация (запись данных пользователя)
     *
     * @param TelegramUserDataDTO $loginDTO
     * @return User
     */
    public function register(TelegramUserDataDTO $loginDTO): User
    {
        return $this->saveUserData($loginDTO);
    }

    /**
     * Сохранение пользовательских данных
     *
     * @param TelegramUserDataDTO $loginDTO
     * @return User
     */
    private function saveUserData(TelegramUserDataDTO $loginDTO): User
    {
        $user = (new User())
            ->setTgLogin($loginDTO->getTgLogin())
            ->setTgId($loginDTO->getTgId());
        $user->save();

        return $user;
    }
}

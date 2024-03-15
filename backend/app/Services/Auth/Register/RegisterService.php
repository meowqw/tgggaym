<?php

namespace App\Services\Auth\Register;

use App\Models\User;
use App\Services\Auth\DTO\TelegramUserDataDTO;

class RegisterService
{
    public RegisterStrategy $strategy;

    public function __construct(RegisterStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * Регистрация нового пользователя
     *
     * @param TelegramUserDataDTO $telegramUserDataDTO
     * @return User
     */
    public function register(TelegramUserDataDTO $telegramUserDataDTO): User
    {
        return $this->strategy->register($telegramUserDataDTO);
    }

    /**
     * @param RegisterStrategy $strategy
     * @return void
     */
    public function setStrategy(RegisterStrategy $strategy): void
    {
        $this->strategy = $strategy;
    }

}

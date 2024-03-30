<?php

namespace App\Services\Api\Auth\Register;

use App\Data\DTO\Auth\TelegramUserDataDTO;
use App\Interfaces\Auth\Register\RegisterStrategyInterface;
use App\Models\User;

class RegisterService
{
    public TelegramRegisterService $strategy;

    public function __construct(TelegramRegisterService $strategy)
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
     * @param RegisterStrategyInterface $strategy
     * @return void
     */
    public function setStrategy(RegisterStrategyInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

}

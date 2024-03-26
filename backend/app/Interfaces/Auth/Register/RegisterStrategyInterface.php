<?php

namespace App\Interfaces\Auth\Register;

use App\Data\DTO\Auth\TelegramUserDataDTO;
use App\Models\User;

interface RegisterStrategyInterface
{
    /**
     * @param TelegramUserDataDTO $loginDTO
     * @return User
     */
    public function register(TelegramUserDataDTO $loginDTO): User;
}

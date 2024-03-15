<?php

namespace App\Services\Auth\Register;

use App\Models\User;
use App\Services\Auth\DTO\TelegramUserDataDTO;

interface RegisterStrategy
{
    /**
     * @param TelegramUserDataDTO $loginDTO
     * @return User
     */
    public function register(TelegramUserDataDTO $loginDTO): User;
}

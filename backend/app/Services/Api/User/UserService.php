<?php

namespace App\Services\Api\User;

use App\Models\User;
use Exception;

class UserService
{
    /**
     * @param int $id
     * @return User
     * @throws Exception
     */
    public static function getUserById(int $id): User
    {
        /** @var User $user */
        $user = User::query()->where('id', $id)->first();

        if ($user === null) {
            throw new \RuntimeException('Пользователь не найден');
        }
        return $user;
    }

}

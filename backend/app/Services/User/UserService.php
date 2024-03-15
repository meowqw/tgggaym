<?php

namespace App\Services\User;

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

        if (is_null($user)) {
            throw new Exception('Пользователь не найден');
        }
        return $user;
    }

}

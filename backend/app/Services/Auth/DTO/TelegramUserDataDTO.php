<?php

namespace App\Services\Auth\DTO;

/**
 * @property int $tgId
 * @property ?string $tgLogin
 */
class TelegramUserDataDTO
{
    /**
     * @param int $tgId
     * @param string|null $tgLogin
     */
    public function __construct(int $tgId, ?string $tgLogin)
    {
        $this->tgId = $tgId;
        $this->tgLogin = $tgLogin;
    }

    /**
     * @return int
     */
    public function getTgId(): int
    {
        return $this->tgId;
    }

    /**
     * @return string|null
     */
    public function getTgLogin(): ?string
    {
        return $this->tgLogin;
    }
}

<?php

namespace App\Services\Api\Character;

use App\Data\DTO\Character\CreateCharacterDTO;
use App\Exceptions\Api\ApiExceptionWithMessage;
use App\Models\Character\Character;
use App\Models\CharacterAppearance\CharacterAppearancePreset;
use App\Models\User;
use App\Services\Api\CharacterAppearance\CharacterAppearancePresetService;

class CharacterService
{
    public function __construct(public CharacterAppearancePresetService $characterAppearancePresetService)
    {
    }

    /**
     * @throws ApiExceptionWithMessage
     */
    public function createCharacter(int $userId, CreateCharacterDTO $DTO): bool
    {
        /** @var User $user */
        $user = User::query()->where('id', $userId)->first();
        $characterAppearance = $this->characterAppearancePresetService->create($DTO);

        $character = (new Character())
            ->setUserId($userId)
            ->setName($user->getTgLogin() ?? (string)$user->getTgId())
            ->setAppearanceId($characterAppearance->getId());
        return $character->save();
    }

    /**
     * @param int $userId
     * @return object|null
     */
    public function getCharacter(int $userId): object|null
    {
        return Character::query()->where('user_id',$userId)->first();
    }
}

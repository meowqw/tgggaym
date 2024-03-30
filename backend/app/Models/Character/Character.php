<?php

namespace App\Models\Character;

use App\Models\CharacterAppearance\CharacterAppearance;
use App\Traits\Model\WithAssetColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property float $balance
 * @property float $experience
 * @property float $mana
 * @property float $valor
 * @property float $hp
 * @property int $appearance_id
 *
 * @property-read CharacterAppearance $appearance
 */
class Character extends Model
{
    use HasFactory;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Character
     */
    public function setId(int $id): Character
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $userId
     * @return Character
     */
    public function setUserId(int $userId): Character
    {
        $this->user_id = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Character
     */
    public function setName(string $name): Character
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     * @return Character
     */
    public function setBalance(float $balance): Character
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return float
     */
    public function getExperience(): float
    {
        return $this->experience;
    }

    /**
     * @param float $experience
     * @return Character
     */
    public function setExperience(float $experience): Character
    {
        $this->experience = $experience;
        return $this;
    }

    /**
     * @return float
     */
    public function getMana(): float
    {
        return $this->mana;
    }

    /**
     * @param float $mana
     * @return Character
     */
    public function setMana(float $mana): Character
    {
        $this->mana = $mana;
        return $this;
    }

    /**
     * @return float
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * @param float $valor
     * @return Character
     */
    public function setValor(float $valor): Character
    {
        $this->valor = $valor;
        return $this;
    }

    /**
     * @return float
     */
    public function getHp(): float
    {
        return $this->hp;
    }

    /**
     * @param float $hp
     * @return Character
     */
    public function setHp(float $hp): Character
    {
        $this->hp = $hp;
        return $this;
    }

    /**
     * @return int
     */
    public function getAppearanceId(): int
    {
        return $this->appearance_id;
    }

    /**
     * @param int $appearanceId
     * @return Character
     */
    public function setAppearanceId(int $appearanceId): Character
    {
        $this->appearance_id = $appearanceId;
        return $this;
    }

    /**
     * @return HasOne
     */
    public function appearance(): HasOne
    {
        return $this->hasOne(CharacterAppearance::class, 'id', 'appearance_id');
    }

    /**
     * @return object|null
     */
    public function getAppearance(): object|null
    {
        return $this->appearance()->first();
    }
}

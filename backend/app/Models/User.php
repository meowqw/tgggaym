<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property int $id
 * @property int $tg_id
 * @property ?string $tg_login
 * @property string $last_login
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * @return int
     */
    public function getTgId(): int
    {
        return $this->tg_id;
    }

    /**
     * @param int $tgId
     * @return User
     */
    public function setTgId(int $tgId): User
    {
        $this->tg_id = $tgId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTgLogin(): ?string
    {
        return $this->tg_login;
    }

    /**
     * @param string|null $tgLogin
     * @return User
     */
    public function setTgLogin(?string $tgLogin): User
    {
        $this->tg_login = $tgLogin;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLastLogin(): string
    {
        return $this->last_login;
    }

    /**
     * @param string $last_login
     * @return User
     */
    public function setLastLogin(string $last_login): User
    {
        $this->last_login = $last_login;
        return $this;
    }
}

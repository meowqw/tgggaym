<?php

namespace App\Http\Requests\Auth;

use App\Services\Auth\DTO\TelegramUserDataDTO;
use Illuminate\Foundation\Http\FormRequest;

class TelegramGetTokenRequest extends FormRequest
{

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'tgId' => 'required|numeric',
            'tgLogin' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            '*.required' => 'Поле :attribute обязательное',
            '*.numeric' => 'Поле :attribute должно быть числом',
            '*.string' => 'Поле :attribute должно быть строкой',
        ];
    }

    /**
     * @return int
     */
    public function getIgId(): int
    {
        return $this->get('tgId');
    }

    /**
     * @return string|null
     */
    public function getTgLogin(): ?string
    {
        return $this->get('tgLogin');
    }

    /**
     * @return TelegramUserDataDTO
     */
    public function getData(): TelegramUserDataDTO
    {
        return new TelegramUserDataDTO($this->getIgId(), $this->getTgLogin());
    }
}

<?php

namespace App\Http\Requests\Character;

use App\Data\DTO\Character\CreateCharacterDTO;
use Illuminate\Foundation\Http\FormRequest;

class CreateCharacterRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'genderId' => 'required|integer',
            'factionId' => 'required|integer',
            'hairId' => 'required|integer',
            'hairColorId' => 'required|integer',
        ];
    }

    public function messages(): array
    {
        return [
            '*.required' => 'Поле :attribute обязательное',
            '*.integer' => 'Поле :attribute должно быть числом',
        ];
    }

    /**
     * @return CreateCharacterDTO
     */
    public function getData(): CreateCharacterDTO
    {
        return new CreateCharacterDTO(
            factionId: $this->get('factionId'),
            genderId: $this->get('genderId'),
            hairId: $this->get('genderId'),
            hairColorId: $this->get('hairColorId')
        );
    }
}

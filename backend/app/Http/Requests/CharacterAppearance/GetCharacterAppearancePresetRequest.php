<?php

namespace App\Http\Requests\CharacterAppearance;

use App\Data\DTO\CharacterAppearance\GetPresetDTO;
use Illuminate\Foundation\Http\FormRequest;

class GetCharacterAppearancePresetRequest extends FormRequest
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
     * @return GetPresetDTO
     */
    public function getData(): GetPresetDTO
    {
        return new GetPresetDTO(
            factionId: $this->get('factionId'),
            genderId: $this->get('genderId'),
            hairId: $this->get('genderId'),
            hairColorId: $this->get('hairColorId')
        );
    }
}

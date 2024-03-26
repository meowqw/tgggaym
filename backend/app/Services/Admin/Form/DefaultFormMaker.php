<?php

namespace App\Services\Admin\Form;

use App\Traits\Admin\SchemaColumnsTrait;

class DefaultFormMaker extends FormMakerAbstract
{
    use SchemaColumnsTrait;

    /**
     * @return array
     */
    public function getFormFields(): array
    {
        return array_map(function ($column) {
            return [
                'type' => 'text',
                'name' => $column,
                'key' => $column,
                'sortable' => true
            ];
        }, $this->getSchemaColumns());
    }
}

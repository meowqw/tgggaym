<?php

namespace App\Services\Admin\Form;

use App\Services\Admin\SchemaColumnsTrait;

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
                'name' => $column,
                'key' => $column,
                'sortable' => true
            ];
        }, $this->getSchemaColumns());
    }
}

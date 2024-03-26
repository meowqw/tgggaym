<?php

namespace App\Services\Admin\Form;

use App\Traits\Admin\SchemaColumnsTrait;

class WithAssetFormMaker extends FormMakerAbstract
{
    use SchemaColumnsTrait;

    /**
     * @return array
     */
    public function getFormFields(): array
    {
        return array_map(function ($column) {
            $type = 'text';

            if ($column == 'asset') {
                $type = 'image';
            }

            return [
                'type' => $type,
                'name' => $column,
                'key' => $column,
                'sortable' => true
            ];
        }, $this->getSchemaColumns());
    }
}

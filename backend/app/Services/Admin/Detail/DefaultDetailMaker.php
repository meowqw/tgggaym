<?php

namespace App\Services\Admin\Detail;

use App\Services\Admin\SchemaColumnsTrait;

class DefaultDetailMaker extends DetailMakerAbstract
{
    use SchemaColumnsTrait;

    /**
     * @return array
     */
    public function getDetailFields(): array
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

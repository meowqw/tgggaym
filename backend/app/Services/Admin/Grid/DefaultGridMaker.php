<?php

namespace App\Services\Admin\Grid;

use App\Traits\Admin\SchemaColumnsTrait;

class DefaultGridMaker extends GridMakerAbstract
{
    use SchemaColumnsTrait;

    public function getGridColumns(): array
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

<?php

namespace App\Services\Admin;

use Illuminate\Support\Facades\Schema;

trait SchemaColumnsTrait
{
    /**
     * @return array
     */
    public function getSchemaColumns(): array
    {
        $model = new $this->model;
        $table = $model->getTable();
        return Schema::getColumnListing($table);
    }
}

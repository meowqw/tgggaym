<?php

namespace App\Services\Admin\Grid;

use Encore\Admin\Grid;

abstract class GridMakerAbstract
{
    protected string $model;
    protected array $columns = [];

    public function __construct($model)
    {
        $this->model = $model;
        $this->columns = $this->getGridColumns();
    }

    public function makeGrid(): Grid
    {
        $grid = new Grid(new $this->model);

        foreach ($this->columns as $column) {
            $grid->column($column['name'], __($column['key']));
        }

        return $grid;
    }

    /**
     * @return array
     */
    abstract public function getGridColumns(): array;
}

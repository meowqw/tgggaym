<?php

namespace App\Services\Admin\Detail;

use Encore\Admin\Show;

abstract class DetailMakerAbstract
{
    protected string $model;
    protected array $columns = [];

    public function __construct($model)
    {
        $this->model = $model;
        $this->columns = $this->getDetailFields();
    }

    /**
     * @param int $id
     * @return Show
     */
    public function makeDetail(int $id): Show
    {
        $show = new Show($this->model::findOrFail($id));

        foreach ($this->columns as $column) {
            $show->field($column['name'], __($column['key']));
        }

        return $show;
    }

    /**
     * @return array
     */
    abstract public function getDetailFields(): array;
}

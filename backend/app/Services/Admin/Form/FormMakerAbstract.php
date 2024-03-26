<?php

namespace App\Services\Admin\Form;

use Encore\Admin\Form;

abstract class FormMakerAbstract
{
    protected string $model;
    protected array $columns = [];

    public function __construct($model)
    {
        $this->model = $model;
        $this->columns = $this->getFormFields();
    }

    /**
     * @return Form
     */
    public function makeForm(): Form
    {
        $form = new Form(new $this->model);

        foreach ($this->columns as $column) {
            switch ($column['type']) {
                case 'text':
                    $form->text($column['name'], __($column['key']));
                    break;
                case 'image':
                    $form->image($column['name'], __($column['key']));
                    break;
            }
        }

        return $form;
    }

    /**
     * @return array
     */
    abstract public function getFormFields(): array;
}

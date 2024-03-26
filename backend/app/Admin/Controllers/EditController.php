<?php

namespace App\Admin\Controllers;

use App\Services\Admin\Detail\DefaultDetailMaker;
use App\Services\Admin\Detail\DetailMakerAbstract;
use App\Services\Admin\Form\DefaultFormMaker;
use App\Services\Admin\Form\FormMakerAbstract;
use App\Services\Admin\Grid\DefaultGridMaker;
use App\Services\Admin\Grid\GridMakerAbstract;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EditController extends AdminController
{
    protected $title;
    protected $model;
    protected string $detailMaker = DefaultDetailMaker::class;
    protected string $gridMaker = DefaultGridMaker::class;
    protected string $formMaker = DefaultFormMaker::class;

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid(): Grid
    {
        /** @var GridMakerAbstract $gridMaker */
        $gridMaker = new $this->gridMaker($this->model);
        return $gridMaker->makeGrid();
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id): Show
    {
        /** @var DetailMakerAbstract $detailMaker */
        $detailMaker = new $this->detailMaker($this->model);
        return $detailMaker->makeDetail($id);
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form(): Form
    {
        /** @var FormMakerAbstract $formMaker */
        $formMaker = new $this->formMaker($this->model);
        return $formMaker->makeForm();
    }

    /**
     * @return void
     */
    public function store(): void
    {
        parent::store();
    }
}

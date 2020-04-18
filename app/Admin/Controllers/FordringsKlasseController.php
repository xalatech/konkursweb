<?php

namespace App\Admin\Controllers;

use App\FordringsKlasse;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FordringsKlasseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\FordringsKlasse';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new FordringsKlasse());

        $grid->column('id', __('Id'));
        $grid->column('klasseforkortelse', __('Klasseforkortelse'));
        $grid->column('klasse', __('Klasse'));
        $grid->column('sortering', __('Sortering'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(FordringsKlasse::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('klasseforkortelse', __('Klasseforkortelse'));
        $show->field('klasse', __('Klasse'));
        $show->field('sortering', __('Sortering'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new FordringsKlasse());

        $form->text('klasseforkortelse', __('Klasseforkortelse'));
        $form->text('klasse', __('Klasse'));
        $form->number('sortering', __('Sortering'));

        return $form;
    }
}

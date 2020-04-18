<?php

namespace App\Admin\Controllers;

use App\BoInfo;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class BoInfoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\BoInfo';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new BoInfo());

        $grid->column('id', __('Id'));
        $grid->column('firma_id', __('Firma id'));
        $grid->column('organisasjonsnummer', __('Organisasjonsnummer'));
        $grid->column('saksnummer', __('Saksnummer'));
        $grid->column('debitor', __('Debitor'));
        $grid->column('kommune_id', __('Kommune id'));
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
        $show = new Show(BoInfo::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('firma_id', __('Firma id'));
        $show->field('organisasjonsnummer', __('Organisasjonsnummer'));
        $show->field('saksnummer', __('Saksnummer'));
        $show->field('debitor', __('Debitor'));
        $show->field('kommune_id', __('Kommune id'));
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
        $form = new Form(new BoInfo());

        $form->number('firma_id', __('Firma id'));
        $form->text('organisasjonsnummer', __('Organisasjonsnummer'));
        $form->text('saksnummer', __('Saksnummer'));
        $form->text('debitor', __('Debitor'));
        $form->number('kommune_id', __('Kommune id'));

        return $form;
    }
}

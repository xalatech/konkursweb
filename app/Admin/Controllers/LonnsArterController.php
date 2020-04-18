<?php

namespace App\Admin\Controllers;

use App\LonnsArter;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LonnsArterController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\LonnsArter';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new LonnsArter());

        $grid->column('id', __('Id'));
        $grid->column('firma_id', __('Firma id'));
        $grid->column('lonns_data_id', __('Lonns data id'));
        $grid->column('kode', __('Kode'));
        $grid->column('tekst', __('Tekst'));
        $grid->column('skattegrunnlag', __('Skattegrunnlag'));
        $grid->column('arbeidsgiveravgift', __('Arbeidsgiveravgift'));
        $grid->column('feriepengergrunnlag', __('Feriepengergrunnlag'));
        $grid->column('altinkode', __('Altinkode'));
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
        $show = new Show(LonnsArter::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('firma_id', __('Firma id'));
        $show->field('lonns_data_id', __('Lonns data id'));
        $show->field('kode', __('Kode'));
        $show->field('tekst', __('Tekst'));
        $show->field('skattegrunnlag', __('Skattegrunnlag'));
        $show->field('arbeidsgiveravgift', __('Arbeidsgiveravgift'));
        $show->field('feriepengergrunnlag', __('Feriepengergrunnlag'));
        $show->field('altinkode', __('Altinkode'));
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
        $form = new Form(new LonnsArter());

        $form->number('firma_id', __('Firma id'));
        $form->number('lonns_data_id', __('Lonns data id'));
        $form->text('kode', __('Kode'));
        $form->text('tekst', __('Tekst'));
        $form->decimal('skattegrunnlag', __('Skattegrunnlag'));
        $form->decimal('arbeidsgiveravgift', __('Arbeidsgiveravgift'));
        $form->decimal('feriepengergrunnlag', __('Feriepengergrunnlag'));
        $form->number('altinkode', __('Altinkode'));

        return $form;
    }
}

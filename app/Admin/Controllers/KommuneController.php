<?php

namespace App\Admin\Controllers;

use App\Kommune;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class KommuneController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Kommune';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Kommune());

        $grid->column('id', __('Id'));
        $grid->column('kommunenummer', __('Kommunenummer'));
        $grid->column('kommune', __('Kommune'));
        $grid->column('adresse', __('Adresse'));
        $grid->column('postnummer', __('Postnummer'));
        $grid->column('poststed', __('Poststed'));
        $grid->column('epost', __('Epost'));
        $grid->column('banknavn', __('Banknavn'));
        $grid->column('bankkonto', __('Bankkonto'));
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
        $show = new Show(Kommune::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('kommunenummer', __('Kommunenummer'));
        $show->field('kommune', __('Kommune'));
        $show->field('adresse', __('Adresse'));
        $show->field('postnummer', __('Postnummer'));
        $show->field('poststed', __('Poststed'));
        $show->field('epost', __('Epost'));
        $show->field('banknavn', __('Banknavn'));
        $show->field('bankkonto', __('Bankkonto'));
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
        $form = new Form(new Kommune());

        $form->text('kommunenummer', __('Kommunenummer'));
        $form->text('kommune', __('Kommune'));
        $form->text('adresse', __('Adresse'));
        $form->text('postnummer', __('Postnummer'));
        $form->text('poststed', __('Poststed'));
        $form->text('epost', __('Epost'));
        $form->text('banknavn', __('Banknavn'));
        $form->text('bankkonto', __('Bankkonto'));

        return $form;
    }
}

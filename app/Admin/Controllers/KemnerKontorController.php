<?php

namespace App\Admin\Controllers;

use App\KemnerKontor;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class KemnerKontorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\KemnerKontor';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new KemnerKontor());

        $grid->column('id', __('Id'));
        $grid->column('kommune_id', __('Kommune id'));
        $grid->column('kemnerkontor', __('Kemnerkontor'));
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
        $show = new Show(KemnerKontor::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('kommune_id', __('Kommune id'));
        $show->field('kemnerkontor', __('Kemnerkontor'));
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
        $form = new Form(new KemnerKontor());

        $form->number('kommune_id', __('Kommune id'));
        $form->text('kemnerkontor', __('Kemnerkontor'));
        $form->text('adresse', __('Adresse'));
        $form->text('postnummer', __('Postnummer'));
        $form->text('poststed', __('Poststed'));
        $form->text('epost', __('Epost'));
        $form->text('banknavn', __('Banknavn'));
        $form->text('bankkonto', __('Bankkonto'));

        return $form;
    }
}

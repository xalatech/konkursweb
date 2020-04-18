<?php

namespace App\Admin\Controllers;

use App\Ansatt;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AnsattController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Ansatt';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Ansatt());

        $grid->column('id', __('Id'));
        $grid->column('firma_id', __('Firma id'));
        $grid->column('bo_id', __('Bo id'));
        $grid->column('fornavn', __('Fornavn'));
        $grid->column('etternavn', __('Etternavn'));
        $grid->column('epost', __('Epost'));
        $grid->column('stilling', __('Stilling'));
        $grid->column('stilling_prosent', __('Stilling prosent'));
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
        $show = new Show(Ansatt::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('firma_id', __('Firma id'));
        $show->field('bo_id', __('Bo id'));
        $show->field('fornavn', __('Fornavn'));
        $show->field('etternavn', __('Etternavn'));
        $show->field('epost', __('Epost'));
        $show->field('stilling', __('Stilling'));
        $show->field('stilling_prosent', __('Stilling prosent'));
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
        $form = new Form(new Ansatt());

        $form->number('firma_id', __('Firma id'));
        $form->number('bo_id', __('Bo id'));
        $form->text('fornavn', __('Fornavn'));
        $form->text('etternavn', __('Etternavn'));
        $form->text('epost', __('Epost'));
        $form->text('stilling', __('Stilling'));
        $form->text('stilling_prosent', __('Stilling prosent'));

        return $form;
    }
}

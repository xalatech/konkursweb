<?php

namespace App\Admin\Controllers;

use App\Kreditor;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class KreditorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Kreditor';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Kreditor());

        $grid->column('id', __('Id'));
        $grid->column('firma_id', __('Firma id'));
        $grid->column('bo_id', __('Bo id'));
        $grid->column('navn', __('Navn'));
        $grid->column('adresse', __('Adresse'));
        $grid->column('postnummer', __('Postnummer'));
        $grid->column('poststed', __('Poststed'));
        $grid->column('epost', __('Epost'));
        $grid->column('banknavn', __('Banknavn'));
        $grid->column('bankkonto', __('Bankkonto'));
        $grid->column('swiftkode', __('Swiftkode'));
        $grid->column('kontaktperson', __('Kontaktperson'));
        $grid->column('onsker_fordrings_bekreftelse', __('Onsker fordrings bekreftelse'));
        $grid->column('onsker_eposter', __('Onsker eposter'));
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
        $show = new Show(Kreditor::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('firma_id', __('Firma id'));
        $show->field('bo_id', __('Bo id'));
        $show->field('navn', __('Navn'));
        $show->field('adresse', __('Adresse'));
        $show->field('postnummer', __('Postnummer'));
        $show->field('poststed', __('Poststed'));
        $show->field('epost', __('Epost'));
        $show->field('banknavn', __('Banknavn'));
        $show->field('bankkonto', __('Bankkonto'));
        $show->field('swiftkode', __('Swiftkode'));
        $show->field('kontaktperson', __('Kontaktperson'));
        $show->field('onsker_fordrings_bekreftelse', __('Onsker fordrings bekreftelse'));
        $show->field('onsker_eposter', __('Onsker eposter'));
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
        $form = new Form(new Kreditor());

        $form->number('firma_id', __('Firma id'));
        $form->number('bo_id', __('Bo id'));
        $form->text('navn', __('Navn'));
        $form->text('adresse', __('Adresse'));
        $form->text('postnummer', __('Postnummer'));
        $form->text('poststed', __('Poststed'));
        $form->text('epost', __('Epost'));
        $form->text('banknavn', __('Banknavn'));
        $form->text('bankkonto', __('Bankkonto'));
        $form->text('swiftkode', __('Swiftkode'));
        $form->text('kontaktperson', __('Kontaktperson'));
        $form->switch('onsker_fordrings_bekreftelse', __('Onsker fordrings bekreftelse'))->default(1);
        $form->switch('onsker_eposter', __('Onsker eposter'))->default(1);

        return $form;
    }
}

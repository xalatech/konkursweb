<?php

namespace App\Admin\Controllers;

use App\AdvokatFirma;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AdvokatFirmaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\AdvokatFirma';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new AdvokatFirma());

        $grid->column('firma_id', __('Firma id'));
        $grid->column('navn', __('Navn'));
        $grid->column('adresse', __('Adresse'));
        $grid->column('postnummer', __('Postnummer'));
        $grid->column('poststed', __('Poststed'));
        $grid->column('epost', __('Epost'));
        $grid->column('banknavn', __('Banknavn'));
        $grid->column('bankkonto', __('Bankkonto'));
        $grid->column('organisasjonsnummer', __('Organisasjonsnummer'));
        $grid->column('kontaktperson', __('Kontaktperson'));
        $grid->column('fakturamottaker', __('Fakturamottaker'));
        $grid->column('pris', __('Pris'));
        $grid->column('aktiv', __('Aktiv'));
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
        $show = new Show(AdvokatFirma::findOrFail($id));

        $show->field('firma_id', __('Firma id'));
        $show->field('navn', __('Navn'));
        $show->field('adresse', __('Adresse'));
        $show->field('postnummer', __('Postnummer'));
        $show->field('poststed', __('Poststed'));
        $show->field('epost', __('Epost'));
        $show->field('banknavn', __('Banknavn'));
        $show->field('bankkonto', __('Bankkonto'));
        $show->field('organisasjonsnummer', __('Organisasjonsnummer'));
        $show->field('kontaktperson', __('Kontaktperson'));
        $show->field('fakturamottaker', __('Fakturamottaker'));
        $show->field('pris', __('Pris'));
        $show->field('aktiv', __('Aktiv'));
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
        $form = new Form(new AdvokatFirma());

        $form->number('firma_id', __('Firma id'));
        $form->text('navn', __('Navn'));
        $form->text('adresse', __('Adresse'));
        $form->text('postnummer', __('Postnummer'));
        $form->text('poststed', __('Poststed'));
        $form->text('epost', __('Epost'));
        $form->text('banknavn', __('Banknavn'));
        $form->text('bankkonto', __('Bankkonto'));
        $form->text('organisasjonsnummer', __('Organisasjonsnummer'));
        $form->text('kontaktperson', __('Kontaktperson'));
        $form->text('fakturamottaker', __('Fakturamottaker'));
        $form->decimal('pris', __('Pris'))->default(0.00);
        $form->switch('aktiv', __('Aktiv'));

        return $form;
    }
}

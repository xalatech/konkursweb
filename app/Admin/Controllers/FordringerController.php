<?php

namespace App\Admin\Controllers;

use App\Fordringer;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class FordringerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Fordringer';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Fordringer());

        $grid->column('id', __('Id'));
        $grid->column('firma_id', __('Firma id'));
        $grid->column('kreditor_id', __('Kreditor id'));
        $grid->column('fordringsnummer', __('Fordringsnummer'));
        $grid->column('pva', __('Pva'));
        $grid->column('fordringsklasse', __('Fordringsklasse'));
        $grid->column('anmeldtdato', __('Anmeldtdato'));
        $grid->column('saksnr', __('Saksnr'));
        $grid->column('saksbehandler', __('Saksbehandler'));
        $grid->column('epost', __('Epost'));
        $grid->column('anmeldtbelop', __('Anmeldtbelop'));
        $grid->column('valuta', __('Valuta'));
        $grid->column('innstiltbelop', __('Innstiltbelop'));
        $grid->column('godkjentbelop', __('Godkjentbelop'));
        $grid->column('koblingtildokumenasjon', __('Koblingtildokumenasjon'));
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
        $show = new Show(Fordringer::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('firma_id', __('Firma id'));
        $show->field('kreditor_id', __('Kreditor id'));
        $show->field('fordringsnummer', __('Fordringsnummer'));
        $show->field('pva', __('Pva'));
        $show->field('fordringsklasse', __('Fordringsklasse'));
        $show->field('anmeldtdato', __('Anmeldtdato'));
        $show->field('saksnr', __('Saksnr'));
        $show->field('saksbehandler', __('Saksbehandler'));
        $show->field('epost', __('Epost'));
        $show->field('anmeldtbelop', __('Anmeldtbelop'));
        $show->field('valuta', __('Valuta'));
        $show->field('innstiltbelop', __('Innstiltbelop'));
        $show->field('godkjentbelop', __('Godkjentbelop'));
        $show->field('koblingtildokumenasjon', __('Koblingtildokumenasjon'));
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
        $form = new Form(new Fordringer());

        $form->number('firma_id', __('Firma id'));
        $form->number('kreditor_id', __('Kreditor id'));
        $form->text('fordringsnummer', __('Fordringsnummer'));
        $form->text('pva', __('Pva'));
        $form->number('fordringsklasse', __('Fordringsklasse'));
        $form->date('anmeldtdato', __('Anmeldtdato'))->default(date('Y-m-d'));
        $form->text('saksnr', __('Saksnr'));
        $form->text('saksbehandler', __('Saksbehandler'));
        $form->text('epost', __('Epost'));
        $form->decimal('anmeldtbelop', __('Anmeldtbelop'));
        $form->decimal('valuta', __('Valuta'));
        $form->decimal('innstiltbelop', __('Innstiltbelop'));
        $form->decimal('godkjentbelop', __('Godkjentbelop'));
        $form->text('koblingtildokumenasjon', __('Koblingtildokumenasjon'));

        return $form;
    }
}

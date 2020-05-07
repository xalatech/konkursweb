<?php

namespace App\Admin\Controllers;

use App\Language;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use Illuminate\Http\Request;
use Spatie\TranslationLoader\LanguageLine;

class LanguageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Language';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Language());
        $grid->column('group', __('Group'));
        $grid->column('key', __('Label'));
        $grid->column('nb', __('Norsk'));
        $grid->column('en', __('English'));

        $grid->filter(function ($filter) {

            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
            $filter->like('group', 'Group');
        });

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
        $show = new Show(Language::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('group', __('Group'));
        $show->field('key', __('Label'));
        $show->field('nb', __('Norsk'));
        $show->field('en', __('English'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Language());

        $form->text('group', __('Group'));
        $form->text('key', __('Key'));
        $form->text('nb', __('Norsk Bokmål'));
        $form->text('en', __('English'));
        $form->textarea('text', __('Text'));
        $form->saving(function (Form $form) {
            $form->text = ['nb' => $form->nb, 'en' => $form->en];
        });

        return $form;
    }
}

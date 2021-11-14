<?php

namespace App\Admin\Controllers;

use App\EtriciaDirectory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class etriciaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'EtriciaDirectory';



    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new EtriciaDirectory());

        $grid->column('id', __('Id'));
        $grid->column('packagecode', __('Packagecode'));
        $grid->column('serial_no', __('Serial no'));
        $grid->column('capacity', __('Capacity'));
        $grid->column('cell_number', __('Cell number'));
        $grid->column('description', __('Description'));
        $grid->column('production_cost', __('Production cost'));
        $grid->column('selling_price', __('Selling price'));
        $grid->column('production_date', __('Production date'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
        graph();
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(EtriciaDirectory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('packagecode', __('Packagecode'));
        $show->field('serial_no', __('Serial no'));
        $show->field('capacity', __('Capacity'));
        $show->field('cell_number', __('Cell number'));
        $show->field('description', __('Description'));
        $show->field('production_cost', __('Production cost'));
        $show->field('selling_price', __('Selling price'));
        $show->field('production_date', __('Production date'));
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
        $form = new Form(new EtriciaDirectory());

        $form->column(1/2, function ($form) {

        $form->text('packagecode', __('Packagecode'));
        $form->text('serial_no', __('Serial no'));
        $form->text('capacity', __('Capacity'));
        $form->decimal('cell_number', __('Cell number'));
        $form->text('description', __('Description'));
        $form->decimal('production_cost', __('Production cost'));
        $form->decimal('selling_price', __('Selling price'));
        $form->text('production_date', __('Production date'));});

        $form->column(1/2,function (Content $content) {

        $content->header('chart');
        $content->description('.....');

        $content->body(view('admin.admin.charts'));

        });

        return $form;
    }
}

<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\ItemOrder;

class OrderItemController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ItemOrder';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ItemOrder());

        $grid->column('id', __('Id'));
        $grid->column('order_id', __('Order id'));
        $grid->column('product_id', __('Product id'));
        $grid->column('quantity', __('Quantity'));
        $grid->column('total_price', __('Total price'));
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
        $show = new Show(ItemOrder::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('order_id', __('Order id'));
        $show->field('product_id', __('Product id'));
        $show->field('quantity', __('Quantity'));
        $show->field('total_price', __('Total price'));
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
        $form = new Form(new ItemOrder());

        $form->number('order_id', __('Order id'));
        $form->number('product_id', __('Product id'));
        $form->number('quantity', __('Quantity'));
        $form->decimal('total_price', __('Total price'));

        return $form;
    }
}

<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Order;

class OrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Order';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Order());

        $grid->column('order_id', __('Order id'));
        $grid->column('user_id', __('User id'));
        $grid->column('address_id', __('Address id'));
        $grid->column('session_id', __('Session id'));
        $grid->column('total_price', __('Total price'));
        $grid->column('paid', __('Paid'));
        $grid->column('process', __('Process'));
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
        $show = new Show(Order::findOrFail($id));

        $show->field('order_id', __('Order id'));
        $show->field('user_id', __('User id'));
        $show->field('address_id', __('Address id'));
        $show->field('session_id', __('Session id'));
        $show->field('total_price', __('Total price'));
        $show->field('paid', __('Paid'));
        $show->field('process', __('Process'));
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
        $form = new Form(new Order());

        $form->number('user_id', __('User id'));
        $form->number('address_id', __('Address id'));
        $form->number('session_id', __('Session id'));
        $form->decimal('total_price', __('Total price'));
        $form->switch('paid', __('Paid'));
        $form->text('process', __('Process'))->default('Received');

        return $form;
    }
}

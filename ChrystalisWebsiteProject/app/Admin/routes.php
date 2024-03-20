<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use OpenAdmin\Admin\Admin;




$var  = new Admin();
$var->routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    
$router->resource('users', UserController::class);
$router->resource('products', ProductController::class);
$router->resource('orders', OrderController::class);
$router->resource('item-orders', OrderItemController::class);
$router->resource('transactions', TransactionController::class);
$router->resource('reviews', ReviewController::class);

});

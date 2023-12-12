<?php

use Illuminate\Routing\Router;
use App\Admin\Controllers\ExampleController;


Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    // Add a route for the ExampleController
    $router->resource('/admin', ExampleController::class);

});
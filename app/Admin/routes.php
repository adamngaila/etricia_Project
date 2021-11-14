<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('etricia-directories', etriciaController::class);
    $router->resource('users', UserController::class);
     //$router->resource('powerpack-parameters', etriciaParamController::class);
    $router->get('/powerpack-parameters', 'etriciaParamController@index');
    $router->get('/admincharts', 'etriciaParamController@DrawCharts')->name('admincharts');



});

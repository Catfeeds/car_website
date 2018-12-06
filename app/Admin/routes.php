<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('/banner',BannersController::class);
    $router->resource('/unit_info',UnitInfosController::class);
    $router->resource('/branch_info',BranchInfosController::class);
    $router->resource('/goods',GoodsController::class);
    $router->resource('/about',AboutsController::class);
    $router->resource('/member',MembersController::class);
    $router->resource('/local',LocalsController::class);
});

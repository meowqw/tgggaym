<?php

use Encore\Admin\Facades\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

$defaultActions = ['index', 'create', 'edit', 'store', 'update'];

$routes = [
    [
        'route' => 'factions',
        'controller' => \App\Admin\Controllers\Faction\FactionController::class,
        'actions' => $defaultActions
    ],
    [
        'route' => 'assets',
        'controller' => \App\Admin\Controllers\Asset\AssetController::class,
        'actions' => $defaultActions
    ],
];


Admin::routes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
    'as' => config('admin.route.prefix') . '.',
], function (Router $router) use ($routes) {
    $router->get('/', 'HomeController@index')->name('home');

    foreach ($routes as $route) {
        Route::prefix($route['route'])->group(function () use ($router, $route) {
            foreach ($route['actions'] as $action) {
                if ($action == 'index') {
                    $router->get('/', [$route['controller'], $action])->name($route['route']);
                }

                if ($action == 'create') {
                    $router->get('/create', [$route['controller'], $action])->name($route['route'] . '-create');
                }

                if ($action == 'edit') {
                    $router->get('/{id}/edit', [$route['controller'], $action])->name($route['route'] . '-edit');
                }

                if ($action == 'store') {
                    $router->post('/', [$route['controller'], $action])->name($route['route'] . '-store');
                }

                if ($action == 'update') {
                    $router->put('/{id}', [$route['controller'], $action])->name($route['route'] . '-update');
                }
            }
        });
    }
});

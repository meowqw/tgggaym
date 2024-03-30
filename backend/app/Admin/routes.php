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
        'route' => 'characters',
        'controller' => \App\Admin\Controllers\Character\CharacterController::class,
        'actions' => $defaultActions
    ],
    [
        'route' => 'hair/colors',
        'controller' => \App\Admin\Controllers\Character\HairColorController::class,
        'actions' => $defaultActions
    ],
    [
        'route' => 'hairs',
        'controller' => \App\Admin\Controllers\Character\HairController::class,
        'actions' => $defaultActions
    ],
    [
        'route' => 'genders',
        'controller' => \App\Admin\Controllers\Character\GenderController::class,
        'actions' => $defaultActions
    ],
    [
        'route' => 'locations',
        'controller' => \App\Admin\Controllers\Location\LocationController::class,
        'actions' => $defaultActions
    ],
    [
        'route' => 'location/objects',
        'controller' => \App\Admin\Controllers\Location\LocationObjectController::class,
        'actions' => $defaultActions
    ],
    [
        'route' => 'game/interface/menu',
        'controller' => \App\Admin\Controllers\GameInterface\MenuItemController::class,
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

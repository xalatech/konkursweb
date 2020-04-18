<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('users', UserController::class);
    $router->resource('advokat-firmas', AdvokatFirmaController::class);
    $router->resource('ansatts', AnsattController::class);
    $router->resource('bo-infos', BoInfoController::class);
    $router->resource('faste-kreditors', FasteKreditorController::class);
    $router->resource('fordringers', FordringerController::class);
    $router->resource('fordrings-klasses', FordringsKlasseController::class);
    $router->resource('kemner-kontors', KemnerKontorController::class);
    $router->resource('kommunes', KommuneController::class);
    $router->resource('kreditors', KreditorController::class);
    $router->resource('lonns-arters', LonnsArterController::class);
    $router->resource('lonns-datas', LonnsDataController::class);
    $router->resource('regnskaps', RegnskapController::class);
});

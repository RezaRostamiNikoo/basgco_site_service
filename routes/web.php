<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->group(['prefix' => 'sites'], function () use ($router) {
        $router->get('/', ['uses' => 'SiteController@index']);
        $router->get('/{site}', ['uses' => 'SiteController@detail']);
        $router->post('/create', ['uses' => 'SiteController@create']);
        $router->post('/{site}/update', ['uses' => 'SiteController@update']);
        $router->delete('/{site}/delete', ['uses' => 'SiteController@delete']);
});

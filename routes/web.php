<?php

use \App\Http\Controllers\User;

/** @var TYPE_NAME $router */
$router->group(['prefix' => 'user', 'namespace' => "User"], function() use ($router) {
    $router->get('/',           'UserController@index');
    $router->get('{id}',        'UserController@get');
    $router->post('/',          'UserController@create');
    $router->put('/{id}',       'UserController@update');
    $router->delete('{id}',     'UserController@delete');
});

$router->group(['prefix' => 'car', 'namespace' => "Car"], function() use ($router) {
    $router->get('/',                           'CarController@index');
    $router->get('{id}',                        'CarController@get');
    $router->post('/',                          'CarController@create');
    $router->put('/{id}',                           'CarController@update');
    $router->delete('{id}',                     'CarController@delete');
    $router->post('/{id}/associateToUser',      'CarController@associateToUser');
    $router->post('/{id}/disassociate',         'CarController@disassociate');
});

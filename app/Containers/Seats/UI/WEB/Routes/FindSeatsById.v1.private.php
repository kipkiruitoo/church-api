<?php

/** @var Route $router */
$router->get('seats/{id}', [
    'as' => 'web_seats_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);

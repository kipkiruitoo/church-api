<?php

/** @var Route $router */
$router->get('seats', [
    'as' => 'web_seats_index',
    'uses'  => 'Controller@index',
    'middleware' => [
      'auth:web',
    ],
]);

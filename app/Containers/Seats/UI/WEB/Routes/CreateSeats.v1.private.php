<?php

/** @var Route $router */
$router->get('seats/create', [
    'as' => 'web_seats_create',
    'uses'  => 'Controller@create',
    'middleware' => [
      'auth:web',
    ],
]);

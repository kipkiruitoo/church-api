<?php

/** @var Route $router */
$router->patch('seats/{id}', [
    'as' => 'web_seats_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);

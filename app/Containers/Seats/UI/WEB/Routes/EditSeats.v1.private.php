<?php

/** @var Route $router */
$router->get('seats/{id}/edit', [
    'as' => 'web_seats_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);

<?php

/** @var Route $router */
$router->delete('seats/{id}', [
    'as' => 'web_seats_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);

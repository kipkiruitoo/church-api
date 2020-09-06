<?php

/** @var Route $router */
$router->post('seats/store', [
    'as' => 'web_seats_store',
    'uses'  => 'Controller@store',
    'middleware' => [
      'auth:web',
    ],
]);

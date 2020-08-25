<?php

/** @var Route $router */
$router->patch('churches/{id}', [
    'as' => 'web_church_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);

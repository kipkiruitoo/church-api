<?php

/** @var Route $router */
$router->get('churches/{id}', [
    'as' => 'web_church_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);

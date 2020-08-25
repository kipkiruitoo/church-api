<?php

/** @var Route $router */
$router->get('churches/{id}/edit', [
    'as' => 'web_church_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);

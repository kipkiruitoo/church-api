<?php

/** @var Route $router */
$router->delete('churches/{id}', [
    'as' => 'web_church_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);

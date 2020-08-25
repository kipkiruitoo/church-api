<?php

/** @var Route $router */
$router->get('churches/create', [
    'as' => 'web_church_create',
    'uses'  => 'Controller@create',
    'middleware' => [
      'auth:web',
    ],
]);

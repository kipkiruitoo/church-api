<?php

/** @var Route $router */
$router->post('churches/store', [
    'as' => 'web_church_store',
    'uses'  => 'Controller@store',
    'middleware' => [
      'auth:web',
    ],
]);

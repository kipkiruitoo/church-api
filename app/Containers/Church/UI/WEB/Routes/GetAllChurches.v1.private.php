<?php

/** @var Route $router */
$router->get('churches', [
    'as' => 'web_church_index',
    'uses'  => 'Controller@index',
    'middleware' => [
      'auth:web',
    ],
]);

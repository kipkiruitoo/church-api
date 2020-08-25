<?php

/** @var Route $router */
$router->get('sessions', [
    'as' => 'web_session_index',
    'uses'  => 'Controller@index',
    'middleware' => [
      'auth:web',
    ],
]);

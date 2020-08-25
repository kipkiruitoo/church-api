<?php

/** @var Route $router */
$router->get('sessions/create', [
    'as' => 'web_session_create',
    'uses'  => 'Controller@create',
    'middleware' => [
      'auth:web',
    ],
]);

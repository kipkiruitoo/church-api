<?php

/** @var Route $router */
$router->get('sessions/{id}', [
    'as' => 'web_session_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);

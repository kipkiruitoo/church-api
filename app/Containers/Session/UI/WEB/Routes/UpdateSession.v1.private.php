<?php

/** @var Route $router */
$router->patch('sessions/{id}', [
    'as' => 'web_session_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);

<?php

/** @var Route $router */
$router->get('sessions/{id}/edit', [
    'as' => 'web_session_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);

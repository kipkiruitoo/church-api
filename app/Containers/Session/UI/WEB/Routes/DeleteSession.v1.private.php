<?php

/** @var Route $router */
$router->delete('sessions/{id}', [
    'as' => 'web_session_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);

<?php

/** @var Route $router */
$router->post('sessions/store', [
    'as' => 'web_session_store',
    'uses'  => 'Controller@store',
    'middleware' => [
      'auth:web',
    ],
]);

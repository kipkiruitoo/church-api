<?php

/**
 * @apiGroup           Session
 * @apiName            createSession
 *
 * @api                {POST} /v1/sessions Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->post('sessions', [
    'as' => 'api_session_create_session',
    'uses'  => 'Controller@createSession',
    'middleware' => [
      'auth:api',
    ],
]);

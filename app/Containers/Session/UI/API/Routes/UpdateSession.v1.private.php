<?php

/**
 * @apiGroup           Session
 * @apiName            updateSession
 *
 * @api                {PATCH} /v1/sessions/:id Update a Session..
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
$router->patch('sessions/{id}', [
  'as' => 'api_session_update_session',
  'uses'  => 'Controller@updateSession',
  'middleware' => [
    'auth:api',
  ],
]);

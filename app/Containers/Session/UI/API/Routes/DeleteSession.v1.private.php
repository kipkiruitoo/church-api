<?php

/**
 * @apiGroup           Session
 * @apiName            deleteSession
 *
 * @api                {DELETE} /v1/sessions/:id Delete a Church Session..
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
$router->delete('sessions/{id}', [
    'as' => 'api_session_delete_session',
    'uses'  => 'Controller@deleteSession',
    'middleware' => [
      'auth:api',
    ],
]);

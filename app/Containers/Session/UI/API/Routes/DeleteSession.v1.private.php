<?php

/**
 * @apiGroup           Session (Events)
 * @apiName            deleteSession
 *
 * @api                {DELETE} /v1/sessions/:id Delete a  Session..
 * @apiDescription     Delete a session  here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 204 OK
{
  
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

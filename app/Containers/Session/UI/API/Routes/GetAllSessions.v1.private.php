<?php

/**
 * @apiGroup           Session
 * @apiName            getAllSessions
 *
 * @api                {GET} /v1/sessions Get All Sessions..
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
$router->get('sessions', [
    'as' => 'api_session_get_all_sessions',
    'uses'  => 'Controller@getAllSessions',
    'middleware' => [
      'auth:api',
    ],
]);

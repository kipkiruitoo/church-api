<?php

/**
 * @apiGroup           Session
 * @apiName            findSessionById
 *
 * @api                {GET} /v1/sessions/:id Endpoint title here..
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
$router->get('sessions/{id}', [
    'as' => 'api_session_find_session_by_id',
    'uses'  => 'Controller@findSessionById',
    'middleware' => [
      'auth:api',
    ],
]);

<?php

/**
 * @apiGroup           Session
 * @apiName            Controller
 *
 * @api                {POST} /v1/session/add/members Endpoint title here..
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
$router->post('session/add/members', [
    'as' => 'api_session_controller',
    'uses'  => 'Controller@addMemberstoSession',
    'middleware' => [
      'auth:api',
    ],
]);

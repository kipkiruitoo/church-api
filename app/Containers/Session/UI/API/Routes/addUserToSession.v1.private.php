<?php

/**
 * @apiGroup           Session
 * @apiName            addUserstoSession
 *
 * @api                {POST} /v1/session/add/users Add Users to Session
 * @apiDescription     seat ID will be assigned automatically..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {Integer}  user_id here..
 * @apiParam           {Integer}  temperature in degrees celcius..
 *  @apiParam           {Integer}  session_id Id of the  session..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "success",
    "message": "User Successfully Added to the church session",
    "data": {
        "seat_id": "2"
    }
}
 */

/** @var Route $router */
$router->post('session/add/users', [
  'as' => 'api_session_add_usersto_session',
  'uses'  => 'Controller@addUserstoSession',
  'middleware' => [
    'auth:api',
  ],
]);

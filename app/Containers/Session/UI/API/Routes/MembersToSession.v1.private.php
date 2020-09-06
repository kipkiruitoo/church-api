<?php

/**
 * @apiGroup           Session
 * @apiName            Controller
 *
 * @api                {POST} /v1/session/add/members  Add Members to a  session seat ID will be assigned automatically...
 * @apiDescription     Add Members to a  session..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User, pass bearer token in header
 *
 * @apiParam           {Integer}  member_id here..
 * @apiParam           {Integer}  temperature in degrees celcius..
 *  @apiParam           {Integer}  session_id Id of the  session..
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "success",
    "message": "Member Successfully Added to the church session",
    "data": {
        "seat_id": "2"
    }
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

<?php

/**
 * @apiGroup           Session
 * @apiName            Controller
 *
 * @api                {POST} /v1/session/add/members  Add Members to a church session...
 * @apiDescription     Add Members to a church session..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {Integer}  member_id here..
 * @apiParam           {Integer}  temperature in degrees celcius..
 *  @apiParam           {Integer}  session_id Id of the church session..
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "success",
    "message": "Member Successfully Added to the church session"
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

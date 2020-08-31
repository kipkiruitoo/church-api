<?php

/**
 * @apiGroup           Member
 * @apiName            deleteMember
 *
 * @api                {DELETE} /v1/members/:id Delete Organization Member..
 * @apiDescription     Delete an instance of a member..
 *
 * @apiVersion         1.0.0
 * @apiPermission       Authenticated User
 *

 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "Success",
    "message": "Member Deleted Successfully"
}
 */

/** @var Route $router */
$router->delete('members/{id}', [
    'as' => 'api_member_delete_member',
    'uses'  => 'Controller@deleteMember',
    'middleware' => [
      'auth:api',
    ],
]);

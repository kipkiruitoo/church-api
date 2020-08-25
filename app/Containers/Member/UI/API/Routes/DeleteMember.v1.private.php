<?php

/**
 * @apiGroup           Member
 * @apiName            deleteMember
 *
 * @api                {DELETE} /v1/members/:id Delete Church Member..
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
$router->delete('members/{id}', [
    'as' => 'api_member_delete_member',
    'uses'  => 'Controller@deleteMember',
    'middleware' => [
      'auth:api',
    ],
]);

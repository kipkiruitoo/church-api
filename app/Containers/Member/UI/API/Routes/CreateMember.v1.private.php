<?php

/**
 * @apiGroup           Member
 * @apiName            createMember
 *
 * @api                {POST} /v1/members Create church Member..
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
$router->post('members', [
    'as' => 'api_member_create_member',
    'uses'  => 'Controller@createMember',
    'middleware' => [
      'auth:api',
    ],
]);

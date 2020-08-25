<?php

/**
 * @apiGroup           Member
 * @apiName            findMemberById
 *
 * @api                {GET} /v1/members/:id Get Church member by Id..
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
$router->get('members/{id}', [
    'as' => 'api_member_find_member_by_id',
    'uses'  => 'Controller@findMemberById',
    'middleware' => [
      'auth:api',
    ],
]);

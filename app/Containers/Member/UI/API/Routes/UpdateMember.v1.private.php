<?php

/**
 * @apiGroup           Member
 * @apiName            updateMember
 *
 * @api                {PATCH} /v1/members/:id Update Church Members..
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
$router->patch('members/{id}', [
    'as' => 'api_member_update_member',
    'uses'  => 'Controller@updateMember',
    'middleware' => [
      'auth:api',
    ],
]);

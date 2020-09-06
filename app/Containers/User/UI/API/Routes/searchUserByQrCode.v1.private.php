<?php

/**
 * @apiGroup           User
 * @apiName
 *
 * @api                {GET} /v1/users Endpoint title here..
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
$router->get('users', [
  'as' => 'api_user_',
  'uses'  => 'Controller@',
  'middleware' => [
    'auth:api',
  ],
]);

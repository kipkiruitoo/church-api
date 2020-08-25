<?php

/**
 * @apiGroup           Church
 * @apiName            updateChurch
 *
 * @api                {PATCH} /v1/churches/:id Update Church Instance..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         v1.0.0
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
$router->patch('churches/{id}', [
    'as' => 'api_church_update_church',
    'uses'  => 'Controller@updateChurch',
    'middleware' => [
      'auth:api',
    ],
]);

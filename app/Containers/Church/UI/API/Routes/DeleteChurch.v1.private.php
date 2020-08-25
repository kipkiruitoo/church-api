<?php

/**
 * @apiGroup           Church
 * @apiName            deleteChurch
 *
 * @api                {DELETE} /v1/churches/:id Delete Church..
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
$router->delete('churches/{id}', [
  'as' => 'api_church_delete_church',
  'uses'  => 'Controller@deleteChurch',
  'middleware' => [
    'auth:api',
  ],
]);

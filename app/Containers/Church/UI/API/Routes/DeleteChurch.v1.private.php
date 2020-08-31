<?php

/**
 * @apiGroup           Organization
 * @apiName            deleteChurch
 *
 * @api                {DELETE} /v1/churches/:id Delete an Organization..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         v1.0.0
 * @apiPermission      Authenticated User
 *

 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "Success",
    "message": "Organization Deleted Successfully"
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

<?php

/**
 * @apiGroup           Church
 * @apiName            findChurchById
 *
 * @api                {GET} /v1/churches/:id Find Church By Id.
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
$router->get('churches/{id}', [
  'as' => 'api_church_find_church_by_id',
  'uses'  => 'Controller@findChurchById',
  'middleware' => [
    'auth:api',
  ],
]);

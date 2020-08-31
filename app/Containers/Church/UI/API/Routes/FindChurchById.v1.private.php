<?php

/**
 * @apiGroup           Organization
 * @apiName            findChurchById
 *
 * @api                {GET} /v1/churches/:id Find Organization By Id.
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
    "message": "Organization Retrieved Successfully",
    "data": {
        "id": 6,
        "name": "maranatha",
        "location": "longisa",
        "seats": 78,
        "created_at": "2020-08-31T07:04:53.000000Z",
        "updated_at": "2020-08-31T07:04:53.000000Z",
        "deleted_at": null
    }
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

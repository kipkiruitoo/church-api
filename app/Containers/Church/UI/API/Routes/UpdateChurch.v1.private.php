<?php

/**
 * @apiGroup           Organization
 * @apiName            updateChurch
 *
 * @api                {PATCH} /v1/churches/:id Update an Organization Instance..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         v1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiParam           {String}  name (optional) 
 * @apiParam           {String}  location (optional) 
 * @apiParam           {String}  seats (optional) 
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "Success",
    "message": "Organizations Updated Successfully",
    "data": {
        "id": 6,
        "name": "maranatha aic",
        "location": "nairobi",
        "seats": "90",
        "created_at": "2020-08-31T07:04:53.000000Z",
        "updated_at": "2020-08-31T07:42:35.000000Z",
        "deleted_at": null
    }
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

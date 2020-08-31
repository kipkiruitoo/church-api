<?php

/**
 * @apiGroup           Organization
 * @apiName            createChurch
 *
 * @api                {POST} /v1/churches Create a new Organization..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         v1.0.0
 * @apiPermission      Authenticated Users
 *
 * @apiParam           {String}  name (required) 
 * @apiParam           {String}  location (required) 
 * @apiParam           {String}  seats (required) 

 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "Success",
    "message": "Organization Created Successfully",
    "data": {
        "name": "maranatha",
        "location": "longisa",
        "seats": "78",
        "updated_at": "2020-08-31T07:06:55.000000Z",
        "created_at": "2020-08-31T07:06:55.000000Z",
        "id": 7
    }
}
 */

/** @var Route $router */
$router->post('churches', [
  'as' => 'api_church_create_church',
  'uses'  => 'Controller@createChurch',
  'middleware' => [
    'auth:api',
  ],
]);

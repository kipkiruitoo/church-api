<?php

/**
 * @apiGroup           Seats
 * @apiName            findSeatsById
 *
 * @api                {GET} /v1/seats/:id Find Seat by ID..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *

 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "Success",
    "message": "Seat Retrieved Successfully",
    "data": {
        "id": 1,
        "name": "seat 1",
        "church_id": 1,
        "venue_id": 1,
        "created_at": "2020-09-06T08:14:43.000000Z",
        "updated_at": "2020-09-06T08:14:43.000000Z"
    }
}
 */

/** @var Route $router */
$router->get('seats/{id}', [
    'as' => 'api_seats_find_seats_by_id',
    'uses'  => 'Controller@findSeatsById',
    'middleware' => [
      'auth:api',
    ],
]);

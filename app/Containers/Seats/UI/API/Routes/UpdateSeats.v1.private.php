<?php

/**
 * @apiGroup           Seats
 * @apiName            updateSeats
 *
 * @api                {PATCH} /v1/seats/:id Update seat info..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 *
 *  @apiParam           {String}  name name of the seat..
 *  @apiParam           {Int}  church_id name of the seat..
 *  @apiParam           {Int}  venue_id name of the seat..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "Success",
    "message": "Seat Updated Successfully",
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
$router->patch('seats/{id}', [
  'as' => 'api_seats_update_seats',
  'uses'  => 'Controller@updateSeats',
  'middleware' => [
    'auth:api',
  ],
]);

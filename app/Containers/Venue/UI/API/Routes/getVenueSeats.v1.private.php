<?php

/**
 * @apiGroup           Venue
 * @apiName            getSeats
 *
 * @api                {GET} /v1/venues/:id/seats Get all venue seats ..
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
    "message": "Venue Updated Successfully",
    "data": [
        {
            "id": 1,
            "name": "seat 1",
            "church_id": 1,
            "venue_id": 1,
            "created_at": "2020-09-06T08:14:43.000000Z",
            "updated_at": "2020-09-06T08:14:43.000000Z"
        },
        {
            "id": 2,
            "name": "seat 1",
            "church_id": 1,
            "venue_id": 1,
            "created_at": "2020-09-06T08:19:24.000000Z",
            "updated_at": "2020-09-06T08:19:24.000000Z"
        }
    ]
}
 */

/** @var Route $router */
$router->get('venues/{id}/seats', [
  'as' => 'api_venue_get_seats',
  'uses'  => 'Controller@getSeats',
  'middleware' => [
    'auth:api',
  ],
]);

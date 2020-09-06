<?php

/**
 * @apiGroup           Seats
 * @apiName            getAllSeats
 *
 * @api                {GET} /v1/seats Get all seats..
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
    "message": "seats Retrieved Successfully",
    "data": {
        "current_page": 1,
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
        ],
        "first_page_url": "http://dev.church/v1/seats?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://dev.church/v1/seats?page=1",
        "next_page_url": null,
        "path": "http://dev.church/v1/seats",
        "per_page": 15,
        "prev_page_url": null,
        "to": 2,
        "total": 2
    }
}
 */

/** @var Route $router */
$router->get('seats', [
    'as' => 'api_seats_get_all_seats',
    'uses'  => 'Controller@getAllSeats',
    'middleware' => [
      'auth:api',
    ],
]);

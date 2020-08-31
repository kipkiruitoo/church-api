<?php

/**
 * @apiGroup           Venue
 * @apiName            findVenueById
 *
 * @api                {GET} /v1/venues/:id Find a Venue by ID..
 * @apiDescription     find venue by id..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "Success",
    "message": "Venue Retrieved Successfully",
    "data": {
        "id": 1,
        "name": "3rd auditorium",
        "location": "nairobi",
        "capacity": 90,
        "church_id": 6,
        "created_at": "2020-08-31T09:12:40.000000Z",
        "updated_at": "2020-08-31T09:19:30.000000Z",
        "deleted_at": null
    }
}
 */

/** @var Route $router */
$router->get('venues/{id}', [
    'as' => 'api_venue_find_venue_by_id',
    'uses'  => 'Controller@findVenueById',
    'middleware' => [
      'auth:api',
    ],
]);

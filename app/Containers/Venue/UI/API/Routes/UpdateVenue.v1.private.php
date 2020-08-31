<?php

/**
 * @apiGroup           Venue
 * @apiName            updateVenue
 *
 * @api                {PATCH} /v1/venues/:id Update venue..
 * @apiDescription     update an instance of a venue..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  name (optional)
 * @apiParam           {Intger}  church_id (optional)
 * @apiParam           {String}  location (optional)
 * @apiParam           {Integer}  capacity (optional) maximum number of people it can accommodate
 *
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "Success",
    "message": "Venue Updated Successfully",
    "data": {
        "id": 1,
        "name": "3rd auditorium",
        "location": "nairobi",
        "capacity": "90",
        "church_id": "6",
        "created_at": "2020-08-31T09:12:40.000000Z",
        "updated_at": "2020-08-31T09:19:30.000000Z",
        "deleted_at": null
    }
}
 */

/** @var Route $router */
$router->patch('venues/{id}', [
    'as' => 'api_venue_update_venue',
    'uses'  => 'Controller@updateVenue',
    'middleware' => [
      'auth:api',
    ],
]);

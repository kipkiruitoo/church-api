<?php

/**
 * @apiGroup           Venue
 * @apiName            getAllVenues
 *
 * @api                {GET} /v1/venues Endpoint title here..
 * @apiDescription     Endpoint description here..
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
    "message": "Venues Retrieved Successfully",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "name": "3rd auditorium",
                "location": "nairobi",
                "capacity": 90,
                "church_id": 6,
                "created_at": "2020-08-31T09:12:40.000000Z",
                "updated_at": "2020-08-31T09:19:30.000000Z",
                "deleted_at": null
            }
        ],
        "first_page_url": "http://dev.church/v1/venues?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://dev.church/v1/venues?page=1",
        "next_page_url": null,
        "path": "http://dev.church/v1/venues",
        "per_page": 15,
        "prev_page_url": null,
        "to": 1,
        "total": 1
    }
}
 */

/** @var Route $router */
$router->get('venues', [
    'as' => 'api_venue_get_all_venues',
    'uses'  => 'Controller@getAllVenues',
    'middleware' => [
      'auth:api',
    ],
]);

<?php

/**
 * @apiGroup           Venue
 * @apiName            createVenue
 *
 * @api                {POST} /v1/venues Create a new venue..
 * @apiDescription     create a new organization venue..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  name (required)
 * @apiParam           {Intger}  church_id (required)
 * @apiParam           {String}  location (required)
 * @apiParam           {Integer}  capacity (required) maximum number of people it can accommodate
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 201 OK
{
    "name": "2nd  auditorium",
    "church_id": "6",
    "location": "nairobi",
    "capacity": "90",
    "updated_at": "2020-08-31T09:12:40.000000Z",
    "created_at": "2020-08-31T09:12:40.000000Z",
    "id": 1
}
 */

/** @var Route $router */
$router->post('venues', [
    'as' => 'api_venue_create_venue',
    'uses'  => 'Controller@createVenue',
    'middleware' => [
      'auth:api',
    ],
]);

<?php

/**
 * @apiGroup           Venue
 * @apiName            deleteVenue
 *
 * @api                {DELETE} /v1/venues/:id Delete a venue..
 * @apiDescription     Delete a venue instance..
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
    "message": "Venue Deleted Successfully"
}
 */

/** @var Route $router */
$router->delete('venues/{id}', [
    'as' => 'api_venue_delete_venue',
    'uses'  => 'Controller@deleteVenue',
    'middleware' => [
      'auth:api',
    ],
]);

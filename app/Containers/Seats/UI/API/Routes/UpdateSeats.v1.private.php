<?php

/**
 * @apiGroup           Seats
 * @apiName            updateSeats
 *
 * @api                {PATCH} /v1/seats/:id Update seat info..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 *
 *  @apiParam           {String}  name name of the seat..
 *  @apiParam           {Int}  church_id name of the seat..
 *  @apiParam           {Int}  venue_id name of the seat..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
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

<?php

/**
 * @apiGroup           Seats
 * @apiName            createSeats
 *
 * @api                {POST} /v1/seats Create a new venue seat..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
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
$router->post('seats', [
  'as' => 'api_seats_create_seats',
  'uses'  => 'Controller@createSeats',
  'middleware' => [
    'auth:api',
  ],
]);

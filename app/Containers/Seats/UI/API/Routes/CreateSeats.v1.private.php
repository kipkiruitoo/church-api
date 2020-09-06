<?php

/**
 * @apiGroup           Seats
 * @apiName            createSeats
 *
 * @api                {POST} /v1/seats Create a new venue seat..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 *  @apiParam           {String}  name name of the seat..
 *  @apiParam           {Int}  church_id name of the seat..
 *  @apiParam           {Int}  venue_id name of the seat..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "name": "seat 1",
    "church_id": "1",
    "venue_id": "1",
    "updated_at": "2020-09-06T08:19:24.000000Z",
    "created_at": "2020-09-06T08:19:24.000000Z",
    "id": 2
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

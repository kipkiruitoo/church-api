<?php

/**
 * @apiGroup           Seats
 * @apiName            deleteSeats
 *
 * @api                {DELETE} /v1/seats/:id Delete a Seat..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK

 */

/** @var Route $router */
$router->delete('seats/{id}', [
  'as' => 'api_seats_delete_seats',
  'uses'  => 'Controller@deleteSeats',
  'middleware' => [
    'auth:api',
  ],
]);

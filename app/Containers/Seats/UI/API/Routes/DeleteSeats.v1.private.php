<?php

/**
 * @apiGroup           Seats
 * @apiName            deleteSeats
 *
 * @api                {DELETE} /v1/seats/:id Endpoint title here..
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
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->delete('seats/{id}', [
    'as' => 'api_seats_delete_seats',
    'uses'  => 'Controller@deleteSeats',
    'middleware' => [
      'auth:api',
    ],
]);

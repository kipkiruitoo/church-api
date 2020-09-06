<?php

/**
 * @apiGroup           Seats
 * @apiName            updateSeats
 *
 * @api                {PATCH} /v1/seats/:id Endpoint title here..
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
$router->patch('seats/{id}', [
    'as' => 'api_seats_update_seats',
    'uses'  => 'Controller@updateSeats',
    'middleware' => [
      'auth:api',
    ],
]);

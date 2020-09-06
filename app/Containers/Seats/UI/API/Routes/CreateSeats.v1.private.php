<?php

/**
 * @apiGroup           Seats
 * @apiName            createSeats
 *
 * @api                {POST} /v1/seats Endpoint title here..
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
$router->post('seats', [
    'as' => 'api_seats_create_seats',
    'uses'  => 'Controller@createSeats',
    'middleware' => [
      'auth:api',
    ],
]);

<?php

/**
 * @apiGroup           Seats
 * @apiName            getAllSeats
 *
 * @api                {GET} /v1/seats Endpoint title here..
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
$router->get('seats', [
    'as' => 'api_seats_get_all_seats',
    'uses'  => 'Controller@getAllSeats',
    'middleware' => [
      'auth:api',
    ],
]);

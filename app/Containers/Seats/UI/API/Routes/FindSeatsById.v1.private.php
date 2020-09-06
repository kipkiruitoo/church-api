<?php

/**
 * @apiGroup           Seats
 * @apiName            findSeatsById
 *
 * @api                {GET} /v1/seats/:id Endpoint title here..
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
$router->get('seats/{id}', [
    'as' => 'api_seats_find_seats_by_id',
    'uses'  => 'Controller@findSeatsById',
    'middleware' => [
      'auth:api',
    ],
]);

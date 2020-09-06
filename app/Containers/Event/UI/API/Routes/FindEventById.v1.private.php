<?php

/**
 * @apiGroup           Event
 * @apiName            findEventById
 *
 * @api                {GET} /v1/events/:id Find Event By ID..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *

 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->get('events/{id}', [
    'as' => 'api_event_find_event_by_id',
    'uses'  => 'Controller@findEventById',
    'middleware' => [
      'auth:api',
    ],
]);

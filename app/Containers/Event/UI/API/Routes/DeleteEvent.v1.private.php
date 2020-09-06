<?php

/**
 * @apiGroup           Event
 * @apiName            deleteEvent
 *
 * @api                {DELETE} /v1/events/:id Delete Event
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *

 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK

 */

/** @var Route $router */
$router->delete('events/{id}', [
  'as' => 'api_event_delete_event',
  'uses'  => 'Controller@deleteEvent',
  'middleware' => [
    'auth:api',
  ],
]);

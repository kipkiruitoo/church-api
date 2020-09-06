<?php

/**
 * @apiGroup           Event
 * @apiName            deleteEvent
 *
 * @api                {DELETE} /v1/events/:id Endpoint title here..
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
$router->delete('events/{id}', [
    'as' => 'api_event_delete_event',
    'uses'  => 'Controller@deleteEvent',
    'middleware' => [
      'auth:api',
    ],
]);

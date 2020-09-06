<?php

/**
 * @apiGroup           Event
 * @apiName            updateEvent
 *
 * @api                {PATCH} /v1/events/:id Endpoint title here..
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
$router->patch('events/{id}', [
    'as' => 'api_event_update_event',
    'uses'  => 'Controller@updateEvent',
    'middleware' => [
      'auth:api',
    ],
]);

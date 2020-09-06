<?php

/**
 * @apiGroup           Event
 * @apiName            getAllEvents
 *
 * @api                {GET} /v1/events Get all Events..
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
$router->get('events', [
  'as' => 'api_event_get_all_events',
  'uses'  => 'Controller@getAllEvents',
  'middleware' => [
    'auth:api',
  ],
]);

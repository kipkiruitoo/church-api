<?php

/**
 * @apiGroup           Event
 * @apiName            createEvent
 *
 * @api                {POST} /v1/events Create a New Event
 * @apiDescription     create a new event..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiParam           {String}  name (required) name of the event..
 * @apiParam           {Date}  date (required) date of the event..
 * @apiParam           {Time}   start_time (required) time of the event..
 * @apiParam           {Time}  end_time (required)  ending time of the event..
 * @apiParam           {Int}  organization_id (optional)id of the organization..
 * @apiParam           {Int } user_id (optional) the person the event belongs to if the event is personal..
 * @apiParam           {Int } created_by (required)  the user creating the event..

 *
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "name": "sunday Mass",
    "event_date": "2020-08-25",
    "start_time": "11:54:03",
    "end_time": "11:54:03",
    "organization_id": "1",
    "user_id": "2",
    "created_by": "2",
    "updated_at": "2020-09-06T07:58:49.000000Z",
    "created_at": "2020-09-06T07:58:49.000000Z",
    "id": 2
}
 */

/** @var Route $router */
$router->post('events', [
  'as' => 'api_event_create_event',
  'uses'  => 'Controller@createEvent',
  'middleware' => [
    'auth:api',
  ],
]);

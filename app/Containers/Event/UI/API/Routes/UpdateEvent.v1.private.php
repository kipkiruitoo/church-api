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
 <?php

/**
 * @apiGroup           Event
 * @apiName            createEvent
 *
 * @api                {PATCH} /v1/events/:id  Update an Event
 * @apiDescription     create a new event..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiParam           {String}  name (optional) name of the event..
 * @apiParam           {Date}  date (optional) date of the event..
 * @apiParam           {Time}   start_time (optional) time of the event..
 * @apiParam           {Time}  end_time (optional)  ending time of the event..
 * @apiParam           {Int}  organization_id (optional)id of the organization..
 * @apiParam           {Int } user_id (optional) the person the event belongs to if the event is personal..
 * @apiParam           {Int } created_by (required)  the user creating the event..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "Success",
    "message": "Event Updated Successfully",
    "data": {
        "id": 1,
        "name": "sunday Mass",
        "event_date": "2020-08-25",
        "start_time": "11:54:03",
        "end_time": "11:54:03",
        "organization_id": 1,
        "user_id": 2,
        "created_by": 2,
        "created_at": "2020-09-06T07:53:55.000000Z",
        "updated_at": "2020-09-06T07:53:55.000000Z",
        "deleted_at": null
    }
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

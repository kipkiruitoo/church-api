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
    "status": "Success",
    "message": "Event Retrieved Successfully",
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
$router->get('events/{id}', [
    'as' => 'api_event_find_event_by_id',
    'uses'  => 'Controller@findEventById',
    'middleware' => [
      'auth:api',
    ],
]);

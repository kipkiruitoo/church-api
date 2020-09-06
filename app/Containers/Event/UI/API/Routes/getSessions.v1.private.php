<?php

/**
 * @apiGroup           Event
 * @apiName            getsessions
 *
 * @api                {GET} /v1/events/:id/sessions Get Event Sessions by event id..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "Success",
    "message": "Event Sessions retrieved successfully",
    "data": [
        {
            "id": 1,
            "name": "0",
            "church_id": 1,
            "venue_id": null,
            "date": "2020-08-25",
            "start_time": "11:11:44",
            "end_time": "11:11:45",
            "created_at": "2020-08-25T11:11:48.000000Z",
            "updated_at": "2020-08-25T11:11:50.000000Z",
            "deleted_at": null,
            "event_id": 1
        },
        {
            "id": 2,
            "name": "0",
            "church_id": 1,
            "venue_id": null,
            "date": "2020-08-25",
            "start_time": "11:52:57",
            "end_time": "11:52:58",
            "created_at": "2020-08-25T11:52:59.000000Z",
            "updated_at": null,
            "deleted_at": null,
            "event_id": 1
        },
        {
            "id": 3,
            "name": "0",
            "church_id": 2,
            "venue_id": null,
            "date": "2020-08-25",
            "start_time": "11:54:03",
            "end_time": "11:54:04",
            "created_at": "2020-08-25T11:54:04.000000Z",
            "updated_at": "2020-08-25T11:54:05.000000Z",
            "deleted_at": null,
            "event_id": 1
        }
    ]
}
 */

/** @var Route $router */
$router->get('events/{id}/sessions', [
  'as' => 'api_event_getsessions',
  'uses'  => 'Controller@getsessions',
  'middleware' => [
    'auth:api',
  ],
]);

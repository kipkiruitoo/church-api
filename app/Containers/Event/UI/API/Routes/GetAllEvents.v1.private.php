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
    "status": "Success",
    "message": "Events Retrieved Successfully",
    "data": {
        "current_page": 1,
        "data": [
            {
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
            },
            {
                "id": 2,
                "name": "sunday Mass",
                "event_date": "2020-08-25",
                "start_time": "11:54:03",
                "end_time": "11:54:03",
                "organization_id": 1,
                "user_id": 2,
                "created_by": 2,
                "created_at": "2020-09-06T07:58:49.000000Z",
                "updated_at": "2020-09-06T07:58:49.000000Z",
                "deleted_at": null
            }
        ],
        "first_page_url": "http://dev.church/v1/events?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://dev.church/v1/events?page=1",
        "next_page_url": null,
        "path": "http://dev.church/v1/events",
        "per_page": 15,
        "prev_page_url": null,
        "to": 2,
        "total": 2
    }
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

<?php

/**
 * @apiGroup           Session
 * @apiName            getAllSessions
 *
 * @api                {GET} /v1/sessions Get All Sessions..
 * @apiDescription     Lists all sessions in the system paginated..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "Success",
    "message": "Sessions Retrieved Successfully",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "church_id": 1,
                "date": "2020-08-25",
                "start_time": "11:11:44",
                "end_time": "11:11:45",
                "created_at": "2020-08-25T11:11:48.000000Z",
                "updated_at": "2020-08-25T11:11:50.000000Z",
                "deleted_at": null,
                "venue_id": null
            },
            {
                "id": 2,
                "church_id": 1,
                "date": "2020-08-25",
                "start_time": "11:52:57",
                "end_time": "11:52:58",
                "created_at": "2020-08-25T11:52:59.000000Z",
                "updated_at": null,
                "deleted_at": null,
                "venue_id": null
            },
            {
                "id": 3,
                "church_id": 2,
                "date": "2020-08-25",
                "start_time": "11:54:03",
                "end_time": "11:54:04",
                "created_at": "2020-08-25T11:54:04.000000Z",
                "updated_at": "2020-08-25T11:54:05.000000Z",
                "deleted_at": null,
                "venue_id": null
            }
        ],
        "first_page_url": "http://dev.church/v1/sessions?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://dev.church/v1/sessions?page=1",
        "next_page_url": null,
        "path": "http://dev.church/v1/sessions",
        "per_page": 15,
        "prev_page_url": null,
        "to": 3,
        "total": 3
    }
}
 */

/** @var Route $router */
$router->get('sessions', [
    'as' => 'api_session_get_all_sessions',
    'uses'  => 'Controller@getAllSessions',
    'middleware' => [
      'auth:api',
    ],
]);

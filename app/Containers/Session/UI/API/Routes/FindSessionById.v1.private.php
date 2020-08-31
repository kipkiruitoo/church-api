<?php

/**
 * @apiGroup           Session (Events)
 * @apiName            findSessionById
 *
 * @api                {GET} /v1/sessions/:id Find  Session by Id.
 * @apiDescription     Retrive a session instance by id..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authrnticated User
 *

 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "Success",
    "message": "Session Retrieved Successfully",
    "data": {
        "id": 5,
        "name": "1st  Service",
        "church_id": 6,
        "venue_id": 2,
        "date": "2020-08-25",
        "start_time": "11:54:03",
        "end_time": "11:54:04",
        "created_at": "2020-08-31T08:47:16.000000Z",
        "updated_at": "2020-08-31T08:47:16.000000Z",
        "deleted_at": null
    }
}
 */

/** @var Route $router */
$router->get('sessions/{id}', [
  'as' => 'api_session_find_session_by_id',
  'uses'  => 'Controller@findSessionById',
  'middleware' => [
    'auth:api',
  ],
]);

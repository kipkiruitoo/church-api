<?php

/**
 * @apiGroup           Session 
 * @apiName            updateSession
 *
 * @api                {PATCH} /v1/sessions/:id Update a Session..
 * @apiDescription     Update instance of a session..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User, pass bearer token in header
 *
 * @apiParam           {String}  name (optional) name of the session..
 * @apiParam           {Integer}  church_id (optional) Organization Id..
 * @apiParam           {Integer}  venue_id (optional) venue id of the session..
 * @apiParam           {Date}  date (optional) Date of the session in the format yyyy-mm-dd..
 * @apiParam           {Time}  start_time (optional) Start time of the session in the format hh:mm:ss ..
 * @apiParam           {Time}  end_time (optional) End Time of the session in the format hh:mm:ss..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "Success",
    "message": "Session Updated Successfully",
    "data": {
        "id": 5,
        "name": "1st  Service",
        "church_id": "6",
        "venue_id": "2",
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
$router->patch('sessions/{id}', [
  'as' => 'api_session_update_session',
  'uses'  => 'Controller@updateSession',
  'middleware' => [
    'auth:api',
  ],
]);

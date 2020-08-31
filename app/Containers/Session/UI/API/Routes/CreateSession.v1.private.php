<?php

/**
 * @apiGroup           Session
 * @apiName            createSession
 *
 * @api                {POST} /v1/sessions Create a  session..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiParam           {String}  name (required) name of the session..
 * @apiParam           {Integer}  church_id (required) Organization Id..
 * @apiParam           {Integer}  venue_id (required) venue id of the session..
 * @apiParam           {Date}  date (required) Date of the session in the format yyyy-mm-dd..
 * @apiParam           {Time}  start_time (required) Start time of the session in the format hh:mm:ss ..
 * @apiParam           {Time}  end_time (required) End Time of the session in the format hh:mm:ss..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 201 Created
{
    "name": "1st  Service",
    "church_id": "6",
    "venue_id": "2",
    "date": "2020-08-25",
    "start_time": "11:54:03",
    "end_time": "11:54:04",
    "updated_at": "2020-08-31T08:47:16.000000Z",
    "created_at": "2020-08-31T08:47:16.000000Z",
    "id": 5
}
 */

/** @var Route $router */
$router->post('sessions', [
    'as' => 'api_session_create_session',
    'uses'  => 'Controller@createSession',
    'middleware' => [
      'auth:api',
    ],
]);

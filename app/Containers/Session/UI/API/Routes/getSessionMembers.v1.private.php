<?php

/**
 * @apiGroup           Session
 * @apiName            getSessionMembers
 *
 * @api                {GET} /v1/session/members/:sessionid Get All members in a church session..
 * @apiDescription     Get All members in a church session..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User, pass bearer token in header
 *
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "success",
    "message": "Members in the church session Successfully Retrieved",
    "data": [
        {
            "id": 2,
            "gender": "Female",
            "phone": 715,
            "church_id": 1,
            "location": "kiambu",
            "yob": 2020,
            "created_at": "2020-08-25T11:11:12.000000Z",
            "updated_at": "2020-08-25T11:11:13.000000Z",
            "deleted_at": null,
            "pivot": {
                "session_id": 2,
                "member_id": 2,
                "temperature": 36,
                "created_at": null,
                "updated_at": null
            }
        }
    ]
}
 */

/** @var Route $router */
$router->get('session/members/{session}', [
  'as' => 'api_session_get_session_members',
  'uses'  => 'Controller@getSessionMembers',
  'middleware' => [
    'auth:api',
  ],
]);

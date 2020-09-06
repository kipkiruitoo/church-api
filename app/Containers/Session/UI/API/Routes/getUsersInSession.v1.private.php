<?php

/**
 * @apiGroup           Session
 * @apiName            session/{id}/users
 *
 * @api                {GET} /v1/session/:id/users Get users in a session.
 * @apiDescription     List of reistered users in a session
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "success",
    "message": "Users in the  session Successfully Retrieved",
    "data": [
        {
            "id": 3,
            "name": "dav",
            "email": "dav@app.com",
            "confirmed": false,
            "gender": null,
            "birth": null,
            "device": null,
            "platform": null,
            "church_id": null,
            "is_client": false,
            "created_at": "2020-08-25T07:31:24.000000Z",
            "updated_at": "2020-08-25T07:31:24.000000Z",
            "deleted_at": null,
            "social_provider": null,
            "social_nickname": null,
            "social_id": null,
            "social_token": null,
            "social_token_secret": null,
            "social_refresh_token": null,
            "social_expires_in": null,
            "social_avatar": null,
            "social_avatar_original": null,
            "pivot": {
                "session_id": 5,
                "user_id": 3,
                "temperature": 39,
                "created_at": "2020-09-06T12:04:07.000000Z",
                "updated_at": "2020-09-06T12:04:07.000000Z"
            }
        }
    ]
}
 */

/** @var Route $router */
$router->get('session/{id}/users', [
  'as' => 'api_session_session/{id}/users',
  'uses'  => 'Controller@getSessionUsers',
  'middleware' => [
    'auth:api',
  ],
]);

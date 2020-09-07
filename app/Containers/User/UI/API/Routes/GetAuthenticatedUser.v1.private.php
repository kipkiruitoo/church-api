<?php

/**
 * @apiGroup           Users
 * @apiName            getAuthenticatedUser
 *
 * @api                {GET} /v1/user/profile Find Logged in User data (Profile Information)
 * @apiDescription     Find the user details of the logged in user from its Token. (without specifying his ID)
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": {
        "object": "User",
        "id": 17,
        "name": "davis",
        "email": "kipkirui@app.com",
        "confirmed": false,
        "qr_string": "acmcf0md9xsxakynzdmmryw1ywsssltf",
        "nickname": null,
        "gender": null,
        "birth": "1997",
        "social_auth_provider": null,
        "social_id": null,
        "social_avatar": {
            "avatar": null,
            "original": null
        },
        "created_at": "2020-09-07T05:54:05.000000Z",
        "updated_at": "2020-09-07T05:54:05.000000Z",
        "readable_created_at": "19 minutes ago",
        "readable_updated_at": "19 minutes ago"
    },
    "meta": {
        "include": [
            "roles"
        ],
        "custom": []
    }
}
 */

$router->get('user/profile', [
  'as' => 'api_user_get_authenticated_user',
  'uses'  => 'Controller@getAuthenticatedUser',
  'middleware' => [
    'auth:api',
  ],
]);

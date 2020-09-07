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
    "status": "Success",
    "message": "User Details Retrieved Successfully",
    "data": {
        "id": 17,
        "name": "davis",
        "email": "kipkirui@app.com",
        "confirmed": false,
        "gender": null,
        "birth": "1997",
        "device": null,
        "platform": null,
        "church_id": null,
        "is_client": true,
        "created_at": "2020-09-07T05:54:05.000000Z",
        "updated_at": "2020-09-07T05:54:05.000000Z",
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
        "qr_string": "acmcf0md9xsxakynzdmmryw1ywsssltf"
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

<?php

/**
 * @apiGroup           Member
 * @apiName            getAllMembers
 *
 * @api                {GET} /v1/members Get all  Members..
 * @apiDescription     Retrieves all members in the system paginated..
 *
 * @apiVersion         1.0.0
 * @apiPermission       Authenticated User
 *

 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "Success",
    "message": "Members Retrieved Successfully",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 1,
                "name": null,
                "gender": "Male",
                "phone": 715,
                "church_id": 1,
                "location": "kiambu",
                "yob": 2020,
                "created_at": "2020-08-25T11:11:12.000000Z",
                "updated_at": "2020-08-25T11:11:13.000000Z",
                "deleted_at": null
            },
            {
                "id": 2,
                "name": "Davis Too",
                "gender": "Male",
                "phone": 715686316,
                "church_id": 6,
                "location": "longisa",
                "yob": 1997,
                "created_at": "2020-08-25T11:11:12.000000Z",
                "updated_at": "2020-08-31T08:08:19.000000Z",
                "deleted_at": null
            },
            {
                "id": 3,
                "name": null,
                "gender": null,
                "phone": null,
                "church_id": null,
                "location": null,
                "yob": null,
                "created_at": "2020-08-31T07:51:30.000000Z",
                "updated_at": "2020-08-31T07:51:30.000000Z",
                "deleted_at": null
            },
            {
                "id": 4,
                "name": null,
                "gender": null,
                "phone": null,
                "church_id": null,
                "location": null,
                "yob": null,
                "created_at": "2020-08-31T07:52:06.000000Z",
                "updated_at": "2020-08-31T07:52:06.000000Z",
                "deleted_at": null
            },
            {
                "id": 5,
                "name": "davis_too",
                "gender": "Male",
                "phone": 715686316,
                "church_id": 6,
                "location": "longisa",
                "yob": null,
                "created_at": "2020-08-31T07:55:33.000000Z",
                "updated_at": "2020-08-31T07:55:33.000000Z",
                "deleted_at": null
            },
            {
                "id": 6,
                "name": "Davis Too",
                "gender": "Male",
                "phone": 715686316,
                "church_id": 6,
                "location": "longisa",
                "yob": null,
                "created_at": "2020-08-31T07:56:00.000000Z",
                "updated_at": "2020-08-31T07:56:00.000000Z",
                "deleted_at": null
            },
            {
                "id": 7,
                "name": "Davis Too",
                "gender": "Male",
                "phone": 715686316,
                "church_id": 6,
                "location": "longisa",
                "yob": null,
                "created_at": "2020-08-31T07:56:21.000000Z",
                "updated_at": "2020-08-31T07:56:21.000000Z",
                "deleted_at": null
            },
            {
                "id": 8,
                "name": "Davis Too",
                "gender": "Male",
                "phone": 715686316,
                "church_id": 6,
                "location": "longisa",
                "yob": 1997,
                "created_at": "2020-08-31T07:56:36.000000Z",
                "updated_at": "2020-08-31T07:56:36.000000Z",
                "deleted_at": null
            }
        ],
        "first_page_url": "http://dev.church/v1/members?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://dev.church/v1/members?page=1",
        "next_page_url": null,
        "path": "http://dev.church/v1/members",
        "per_page": 15,
        "prev_page_url": null,
        "to": 8,
        "total": 8
    }
}
 */

/** @var Route $router */
$router->get('members', [
    'as' => 'api_member_get_all_members',
    'uses'  => 'Controller@getAllMembers',
    'middleware' => [
      'auth:api',
    ],
]);

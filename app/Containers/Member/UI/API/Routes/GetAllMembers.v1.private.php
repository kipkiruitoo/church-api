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
                "id": 11,
                "name": "Davis Too",
                "gender": "Male",
                "qr_string": "mzm-dxbqdrnb-2j3yuzhkgsx-1zsxao",
                "phone": 715686316,
                "church_id": 6,
                "location": "longisa",
                "yob": 1997,
                "created_at": "2020-09-01T08:27:49.000000Z",
                "updated_at": "2020-09-01T08:27:49.000000Z",
                "deleted_at": null
            },
            {
                "id": 12,
                "name": "Davis Too",
                "gender": "Male",
                "qr_string": "u-exni6r-lkslp-hfarpdpjh-hayl-at-r5",
                "phone": 715686316,
                "church_id": 6,
                "location": "longisa",
                "yob": 1997,
                "created_at": "2020-09-01T08:27:53.000000Z",
                "updated_at": "2020-09-01T08:27:53.000000Z",
                "deleted_at": null
            },
            {
                "id": 13,
                "name": "Davis Too",
                "gender": "Male",
                "qr_string": "3mv-7usxofgkgbpibmo9yniupg8-m4ir",
                "phone": 715686316,
                "church_id": 6,
                "location": "longisa",
                "yob": 1997,
                "created_at": "2020-09-01T08:27:54.000000Z",
                "updated_at": "2020-09-01T08:27:54.000000Z",
                "deleted_at": null
            },
            {
                "id": 14,
                "name": "Davis Too",
                "gender": "Male",
                "qr_string": "5lxrihseq7lkczhqcwi-at-33fnun",
                "phone": 715686316,
                "church_id": 6,
                "location": "longisa",
                "yob": 1997,
                "created_at": "2020-09-01T08:27:57.000000Z",
                "updated_at": "2020-09-01T08:27:57.000000Z",
                "deleted_at": null
            },
            {
                "id": 15,
                "name": "Davis Too",
                "gender": "Male",
                "qr_string": "vn6aynupydiyyw60zlq788puk",
                "phone": 715686316,
                "church_id": 6,
                "location": "longisa",
                "yob": 1997,
                "created_at": "2020-09-01T08:30:26.000000Z",
                "updated_at": "2020-09-01T08:30:26.000000Z",
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
        "to": 5,
        "total": 5
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

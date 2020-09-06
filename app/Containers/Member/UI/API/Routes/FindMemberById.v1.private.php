<?php

/**
 * @apiGroup           Member
 * @apiName            findMemberById
 *
 * @api                {GET} /v1/members/:id Get Organization member by Id..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission       Authenticated User
 *

 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "Success",
    "message": "Member Retrieved Successfully",
    "data": {
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
    }
}
 */

/** @var Route $router */
$router->get('members/{id}', [
    'as' => 'api_member_find_member_by_id',
    'uses'  => 'Controller@findMemberById',
    'middleware' => [
      'auth:api',
    ],
]);

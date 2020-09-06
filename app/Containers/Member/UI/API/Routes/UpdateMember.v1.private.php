<?php

/**
 * @apiGroup           Member
 * @apiName            updateMember
 *
 * @api                {PATCH} /v1/members/:id Update Organization Member..
 * @apiDescription     Update an instance of a member..
 *
 * @apiVersion         1.0.0
 * @apiPermission       Authenticated User
 *
 * @apiParam           {String}  name  (optional)
 * @apiParam           {String}  gender  (optional) Should Be strictly Male or Female...
 * @apiParam           {Integer}  phone (optional) Should be in full International format without he +
 * @apiParam           {Integer}  church_id (optional) Id of the Organization you are registering the member to...
 * @apiParam           {string}  location (optional) Residence of the member
 * @apiParam           {Year}  yob (optional) Year of birth of the member
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "Success",
    "message": "Member Updated Successfully",
    "data": {
        "id": 16,
        "name": "seat 1",
        "gender": "Male",
        "qr_string": "6jtdbmjvmr77rfef7btafxvx",
        "phone": 715686316,
        "church_id": 1,
        "location": "manyatta",
        "yob": 1997,
        "created_at": "2020-09-06T09:12:48.000000Z",
        "updated_at": "2020-09-06T09:12:48.000000Z",
        "deleted_at": null
    }
}
 */

/** @var Route $router */
$router->patch('members/{id}', [
    'as' => 'api_member_update_member',
    'uses'  => 'Controller@updateMember',
    'middleware' => [
      'auth:api',
    ],
]);

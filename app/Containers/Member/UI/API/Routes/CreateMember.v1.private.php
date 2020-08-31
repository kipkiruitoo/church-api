<?php

/**
 * @apiGroup           Member
 * @apiName            createMember
 *
 * @api                {POST} /v1/members Create Organization Member..
 * @apiDescription     create an instance of an organization's member..
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiParam           {String}  name  (required)
 * @apiParam           {String}  gender  (required)Should Be strictly Male or Female...
 * @apiParam           {Integer}  phone (required) Should be in full International format without he +
 * @apiParam           {Integer}  church_id (required) Id of the Organization you are registering the member to... 
 * @apiParam           {string}  location (required) Residence of the member 
 * @apiParam           {Year}  yob (required) Year of birth of the member 
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "name": "Davis Too",
    "gender": "Male",
    "phone": "0715686316",
    "church_id": "6",
    "location": "longisa",
    "yob": "1997",
    "updated_at": "2020-08-31T07:56:36.000000Z",
    "created_at": "2020-08-31T07:56:36.000000Z",
    "id": 8
}
 */

/** @var Route $router */
$router->post('members', [
    'as' => 'api_member_create_member',
    'uses'  => 'Controller@createMember',
    'middleware' => [
      'auth:api',
    ],
]);

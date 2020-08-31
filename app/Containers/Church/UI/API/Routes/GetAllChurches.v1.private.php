<?php

/**
 * @apiGroup           Organization
 * @apiName            getAllChurches
 *
 * @api                {GET} /v1/churches Get a list of all Organizations..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         v1.0.0
 * @apiPermission      Authenticated User
 *

 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "status": "Success",
    "message": "Organizations Retrieved Successfully",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 2,
                "name": null,
                "location": null,
                "seats": null,
                "created_at": "2020-08-31T06:26:55.000000Z",
                "updated_at": "2020-08-31T06:26:55.000000Z",
                "deleted_at": null
            }
           
        ],
        "first_page_url": "http://dev.church/v1/churches?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://dev.church/v1/churches?page=1",
        "next_page_url": null,
        "path": "http://dev.church/v1/churches",
        "per_page": 15,
        "prev_page_url": null,
        "to": 3,
        "total": 3
    }
}
 */

/** @var Route $router */
$router->get('churches', [
    'as' => 'api_church_get_all_churches',
    'uses'  => 'Controller@getAllChurches',
    'middleware' => [
      'auth:api',
    ],
]);

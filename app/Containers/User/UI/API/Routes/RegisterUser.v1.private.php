<?php

/**
 * @apiGroup           Users
 * @apiName            registerUser
 * @api                {post} /v1/register Register User (create client)
 * @apiDescription     Register users as (client).
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  email (required)
 * @apiParam           {String}  password (required)
 * @apiParam           {String}  name (optional)
 * @apiParam           {String}  gender (optional)
 * @apiParam           {String}  birth (optional)
 *
 * @apiUse             UserSuccessSingleResponse
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "email": "kipkirui@app.com",
    "name": "davis",
    "gender": null,
    "birth": "1997",
    "qr_string": "jk8dvgr0pyk2d0tpwf4aom8tpxa4jz4",
    "is_client": true,
    "updated_at": "2020-09-06T12:57:46.000000Z",
    "created_at": "2020-09-06T12:57:46.000000Z",
    "id": 8
}

 */
$router->post('/register', [
  'as' => 'api_user_register_user',
  'uses'  => 'Controller@registerUser',
]);

<?php

/**
 * @apiGroup           Users
 * @apiName            getAllClients
 * @api                {get} /v1/clients Get All Client Users
 * @apiDescription     Get All Users where role `Client`.
 *                     You can search for Users by email, name and qr string.
 *                     Example: `?search=Mahmoud` or `?search=whatever@mail.com`.
 *                     You can specify the field as follow `?search=qr_string:jk8dvgr0pyk2d0tpwf4aom8tpxa4jz4` or `?search=id:20`.
 *                     You can search by multiple fields as follow: `?search=qr_string:jk8dvgr0pyk2d0tpwf4aom8tpxa4jz4`.
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiUse             GeneralSuccessMultipleResponse
 */

$router->get('clients', [
  'as' => 'api_user_get_all_clients',
  'uses'       => 'Controller@getAllClients',
  'middleware' => [
    'auth:api',
  ],
]);

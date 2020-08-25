<?php

/**
 * @apiGroup           Church
 * @apiName            createChurch
 *
 * @api                {POST} /v1/churches Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         v1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->post('churches', [
    'as' => 'api_church_create_church',
    'uses'  => 'Controller@createChurch',
    'middleware' => [
      'auth:api',
    ],
]);

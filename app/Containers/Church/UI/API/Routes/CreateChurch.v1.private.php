<?php

/**
 * @apiGroup           Church
 * @apiName            createChurch
 *
 * @api                {POST} /v1/churches Create a new Church..
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

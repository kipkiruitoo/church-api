<?php

/**
 * @apiGroup           Church
 * @apiName            getAllChurches
 *
 * @api                {GET} /v1/churches Get a list of Churches..
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
$router->get('churches', [
    'as' => 'api_church_get_all_churches',
    'uses'  => 'Controller@getAllChurches',
    'middleware' => [
      'auth:api',
    ],
]);

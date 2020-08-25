<?php

namespace App\Containers\Session\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class SessionRepository
 */
class SessionRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}

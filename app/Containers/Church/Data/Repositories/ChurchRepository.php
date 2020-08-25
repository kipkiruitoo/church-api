<?php

namespace App\Containers\Church\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class ChurchRepository
 */
class ChurchRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}

<?php

namespace App\Containers\Seats\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class SeatsRepository
 */
class SeatsRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}

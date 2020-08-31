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
        'name' => 'like',
        'location' => 'like',
        'seats' => '=',
        'created_at' => 'like',
        
    ];

}

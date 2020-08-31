<?php

namespace App\Containers\Venue\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class VenueRepository
 */
class VenueRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}

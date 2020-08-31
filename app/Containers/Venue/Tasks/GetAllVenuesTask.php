<?php

namespace App\Containers\Venue\Tasks;

use App\Containers\Venue\Data\Repositories\VenueRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllVenuesTask extends Task
{

    protected $repository;

    public function __construct(VenueRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}

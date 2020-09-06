<?php

namespace App\Containers\Seats\Tasks;

use App\Containers\Seats\Data\Repositories\SeatsRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllSeatsTask extends Task
{

    protected $repository;

    public function __construct(SeatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}

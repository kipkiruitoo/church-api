<?php

namespace App\Containers\Venue\Tasks;

use App\Containers\Venue\Data\Repositories\VenueRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateVenueTask extends Task
{

    protected $repository;

    public function __construct(VenueRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}

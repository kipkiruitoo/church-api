<?php

namespace App\Containers\Venue\Tasks;

use App\Containers\Venue\Data\Repositories\VenueRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteVenueTask extends Task
{

    protected $repository;

    public function __construct(VenueRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}

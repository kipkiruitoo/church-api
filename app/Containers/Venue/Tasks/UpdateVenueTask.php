<?php

namespace App\Containers\Venue\Tasks;

use App\Containers\Venue\Data\Repositories\VenueRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateVenueTask extends Task
{

    protected $repository;

    public function __construct(VenueRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}

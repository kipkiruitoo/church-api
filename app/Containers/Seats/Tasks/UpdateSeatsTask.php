<?php

namespace App\Containers\Seats\Tasks;

use App\Containers\Seats\Data\Repositories\SeatsRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateSeatsTask extends Task
{

    protected $repository;

    public function __construct(SeatsRepository $repository)
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

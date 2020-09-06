<?php

namespace App\Containers\Seats\Tasks;

use App\Containers\Seats\Data\Repositories\SeatsRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteSeatsTask extends Task
{

    protected $repository;

    public function __construct(SeatsRepository $repository)
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

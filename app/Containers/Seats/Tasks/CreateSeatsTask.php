<?php

namespace App\Containers\Seats\Tasks;

use App\Containers\Seats\Data\Repositories\SeatsRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateSeatsTask extends Task
{

    protected $repository;

    public function __construct(SeatsRepository $repository)
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

<?php

namespace App\Containers\Session\Tasks;

use App\Containers\Session\Data\Repositories\SessionRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateSessionTask extends Task
{

    protected $repository;

    public function __construct(SessionRepository $repository)
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

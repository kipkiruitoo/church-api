<?php

namespace App\Containers\Session\Tasks;

use App\Containers\Session\Data\Repositories\SessionRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindSessionByIdTask extends Task
{

    protected $repository;

    public function __construct(SessionRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}

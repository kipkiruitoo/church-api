<?php

namespace App\Containers\Session\Tasks;

use App\Containers\Session\Data\Repositories\SessionRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteSessionTask extends Task
{

    protected $repository;

    public function __construct(SessionRepository $repository)
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

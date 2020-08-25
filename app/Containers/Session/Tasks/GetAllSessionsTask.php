<?php

namespace App\Containers\Session\Tasks;

use App\Containers\Session\Data\Repositories\SessionRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllSessionsTask extends Task
{

    protected $repository;

    public function __construct(SessionRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}

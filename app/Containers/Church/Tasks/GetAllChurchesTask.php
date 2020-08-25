<?php

namespace App\Containers\Church\Tasks;

use App\Containers\Church\Data\Repositories\ChurchRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllChurchesTask extends Task
{

    protected $repository;

    public function __construct(ChurchRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}

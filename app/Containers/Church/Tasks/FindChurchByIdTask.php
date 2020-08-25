<?php

namespace App\Containers\Church\Tasks;

use App\Containers\Church\Data\Repositories\ChurchRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindChurchByIdTask extends Task
{

    protected $repository;

    public function __construct(ChurchRepository $repository)
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

<?php

namespace App\Containers\Church\Tasks;

use App\Containers\Church\Data\Repositories\ChurchRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateChurchTask extends Task
{

    protected $repository;

    public function __construct(ChurchRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        // var_dump($data);
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}

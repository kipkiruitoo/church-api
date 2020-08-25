<?php

namespace App\Containers\Church\Tasks;

use App\Containers\Church\Data\Repositories\ChurchRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateChurchTask extends Task
{

    protected $repository;

    public function __construct(ChurchRepository $repository)
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

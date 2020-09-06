<?php

namespace App\Containers\Seats\UI\API\Controllers;

use App\Containers\Seats\UI\API\Requests\CreateSeatsRequest;
use App\Containers\Seats\UI\API\Requests\DeleteSeatsRequest;
use App\Containers\Seats\UI\API\Requests\GetAllSeatsRequest;
use App\Containers\Seats\UI\API\Requests\FindSeatsByIdRequest;
use App\Containers\Seats\UI\API\Requests\UpdateSeatsRequest;
use App\Containers\Seats\UI\API\Transformers\SeatsTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Seats\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateSeatsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createSeats(CreateSeatsRequest $request)
    {
        $seats = Apiato::call('Seats@CreateSeatsAction', [$request]);

        return $this->created($this->transform($seats, SeatsTransformer::class));
    }

    /**
     * @param FindSeatsByIdRequest $request
     * @return array
     */
    public function findSeatsById(FindSeatsByIdRequest $request)
    {
        $seats = Apiato::call('Seats@FindSeatsByIdAction', [$request]);

        return $this->transform($seats, SeatsTransformer::class);
    }

    /**
     * @param GetAllSeatsRequest $request
     * @return array
     */
    public function getAllSeats(GetAllSeatsRequest $request)
    {
        $seats = Apiato::call('Seats@GetAllSeatsAction', [$request]);

        return $this->transform($seats, SeatsTransformer::class);
    }

    /**
     * @param UpdateSeatsRequest $request
     * @return array
     */
    public function updateSeats(UpdateSeatsRequest $request)
    {
        $seats = Apiato::call('Seats@UpdateSeatsAction', [$request]);

        return $this->transform($seats, SeatsTransformer::class);
    }

    /**
     * @param DeleteSeatsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteSeats(DeleteSeatsRequest $request)
    {
        Apiato::call('Seats@DeleteSeatsAction', [$request]);

        return $this->noContent();
    }
}

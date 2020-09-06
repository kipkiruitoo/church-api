<?php

namespace App\Containers\Seats\UI\WEB\Controllers;

use App\Containers\Seats\UI\WEB\Requests\CreateSeatsRequest;
use App\Containers\Seats\UI\WEB\Requests\DeleteSeatsRequest;
use App\Containers\Seats\UI\WEB\Requests\GetAllSeatsRequest;
use App\Containers\Seats\UI\WEB\Requests\FindSeatsByIdRequest;
use App\Containers\Seats\UI\WEB\Requests\UpdateSeatsRequest;
use App\Containers\Seats\UI\WEB\Requests\StoreSeatsRequest;
use App\Containers\Seats\UI\WEB\Requests\EditSeatsRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Seats\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllSeatsRequest $request
     */
    public function index(GetAllSeatsRequest $request)
    {
        $seats = Apiato::call('Seats@GetAllSeatsAction', [$request]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindSeatsByIdRequest $request
     */
    public function show(FindSeatsByIdRequest $request)
    {
        $seats = Apiato::call('Seats@FindSeatsByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateSeatsRequest $request
     */
    public function create(CreateSeatsRequest $request)
    {
        // ..
    }

    /**
     * Add a new entity
     *
     * @param StoreSeatsRequest $request
     */
    public function store(StoreSeatsRequest $request)
    {
        $seats = Apiato::call('Seats@CreateSeatsAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditSeatsRequest $request
     */
    public function edit(EditSeatsRequest $request)
    {
        $seats = Apiato::call('Seats@GetSeatsByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateSeatsRequest $request
     */
    public function update(UpdateSeatsRequest $request)
    {
        $seats = Apiato::call('Seats@UpdateSeatsAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteSeatsRequest $request
     */
    public function delete(DeleteSeatsRequest $request)
    {
         $result = Apiato::call('Seats@DeleteSeatsAction', [$request]);

         // ..
    }
}

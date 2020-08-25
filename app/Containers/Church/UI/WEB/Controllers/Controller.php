<?php

namespace App\Containers\Church\UI\WEB\Controllers;

use App\Containers\Church\UI\WEB\Requests\CreateChurchRequest;
use App\Containers\Church\UI\WEB\Requests\DeleteChurchRequest;
use App\Containers\Church\UI\WEB\Requests\GetAllChurchesRequest;
use App\Containers\Church\UI\WEB\Requests\FindChurchByIdRequest;
use App\Containers\Church\UI\WEB\Requests\UpdateChurchRequest;
use App\Containers\Church\UI\WEB\Requests\StoreChurchRequest;
use App\Containers\Church\UI\WEB\Requests\EditChurchRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Church\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllChurchesRequest $request
     */
    public function index(GetAllChurchesRequest $request)
    {
        $churches = Apiato::call('Church@GetAllChurchesAction', [$request]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindChurchByIdRequest $request
     */
    public function show(FindChurchByIdRequest $request)
    {
        $church = Apiato::call('Church@FindChurchByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateChurchRequest $request
     */
    public function create(CreateChurchRequest $request)
    {
        // ..
    }

    /**
     * Add a new entity
     *
     * @param StoreChurchRequest $request
     */
    public function store(StoreChurchRequest $request)
    {
        $church = Apiato::call('Church@CreateChurchAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditChurchRequest $request
     */
    public function edit(EditChurchRequest $request)
    {
        $church = Apiato::call('Church@GetChurchByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateChurchRequest $request
     */
    public function update(UpdateChurchRequest $request)
    {
        $church = Apiato::call('Church@UpdateChurchAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteChurchRequest $request
     */
    public function delete(DeleteChurchRequest $request)
    {
         $result = Apiato::call('Church@DeleteChurchAction', [$request]);

         // ..
    }
}

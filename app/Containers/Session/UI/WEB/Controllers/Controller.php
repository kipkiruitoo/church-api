<?php

namespace App\Containers\Session\UI\WEB\Controllers;

use App\Containers\Session\UI\WEB\Requests\CreateSessionRequest;
use App\Containers\Session\UI\WEB\Requests\DeleteSessionRequest;
use App\Containers\Session\UI\WEB\Requests\GetAllSessionsRequest;
use App\Containers\Session\UI\WEB\Requests\FindSessionByIdRequest;
use App\Containers\Session\UI\WEB\Requests\UpdateSessionRequest;
use App\Containers\Session\UI\WEB\Requests\StoreSessionRequest;
use App\Containers\Session\UI\WEB\Requests\EditSessionRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Session\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllSessionsRequest $request
     */
    public function index(GetAllSessionsRequest $request)
    {
        $sessions = Apiato::call('Session@GetAllSessionsAction', [$request]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindSessionByIdRequest $request
     */
    public function show(FindSessionByIdRequest $request)
    {
        $session = Apiato::call('Session@FindSessionByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateSessionRequest $request
     */
    public function create(CreateSessionRequest $request)
    {
        // ..
    }

    /**
     * Add a new entity
     *
     * @param StoreSessionRequest $request
     */
    public function store(StoreSessionRequest $request)
    {
        $session = Apiato::call('Session@CreateSessionAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditSessionRequest $request
     */
    public function edit(EditSessionRequest $request)
    {
        $session = Apiato::call('Session@GetSessionByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateSessionRequest $request
     */
    public function update(UpdateSessionRequest $request)
    {
        $session = Apiato::call('Session@UpdateSessionAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteSessionRequest $request
     */
    public function delete(DeleteSessionRequest $request)
    {
         $result = Apiato::call('Session@DeleteSessionAction', [$request]);

         // ..
    }
}

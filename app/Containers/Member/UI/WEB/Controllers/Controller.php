<?php

namespace App\Containers\Member\UI\WEB\Controllers;

use App\Containers\Member\UI\WEB\Requests\CreateMemberRequest;
use App\Containers\Member\UI\WEB\Requests\DeleteMemberRequest;
use App\Containers\Member\UI\WEB\Requests\GetAllMembersRequest;
use App\Containers\Member\UI\WEB\Requests\FindMemberByIdRequest;
use App\Containers\Member\UI\WEB\Requests\UpdateMemberRequest;
use App\Containers\Member\UI\WEB\Requests\StoreMemberRequest;
use App\Containers\Member\UI\WEB\Requests\EditMemberRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Member\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllMembersRequest $request
     */
    public function index(GetAllMembersRequest $request)
    {
        $members = Apiato::call('Member@GetAllMembersAction', [$request]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindMemberByIdRequest $request
     */
    public function show(FindMemberByIdRequest $request)
    {
        $member = Apiato::call('Member@FindMemberByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateMemberRequest $request
     */
    public function create(CreateMemberRequest $request)
    {
        // ..
    }

    /**
     * Add a new entity
     *
     * @param StoreMemberRequest $request
     */
    public function store(StoreMemberRequest $request)
    {
        $member = Apiato::call('Member@CreateMemberAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditMemberRequest $request
     */
    public function edit(EditMemberRequest $request)
    {
        $member = Apiato::call('Member@GetMemberByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateMemberRequest $request
     */
    public function update(UpdateMemberRequest $request)
    {
        $member = Apiato::call('Member@UpdateMemberAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteMemberRequest $request
     */
    public function delete(DeleteMemberRequest $request)
    {
         $result = Apiato::call('Member@DeleteMemberAction', [$request]);

         // ..
    }
}

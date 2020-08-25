<?php

namespace App\Containers\Member\UI\API\Controllers;

use App\Containers\Member\UI\API\Requests\CreateMemberRequest;
use App\Containers\Member\UI\API\Requests\DeleteMemberRequest;
use App\Containers\Member\UI\API\Requests\GetAllMembersRequest;
use App\Containers\Member\UI\API\Requests\FindMemberByIdRequest;
use App\Containers\Member\UI\API\Requests\UpdateMemberRequest;
use App\Containers\Member\UI\API\Transformers\MemberTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Member\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateMemberRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createMember(CreateMemberRequest $request)
    {
        $member = Apiato::call('Member@CreateMemberAction', [$request]);

        return $this->created($this->transform($member, MemberTransformer::class));
    }

    /**
     * @param FindMemberByIdRequest $request
     * @return array
     */
    public function findMemberById(FindMemberByIdRequest $request)
    {
        $member = Apiato::call('Member@FindMemberByIdAction', [$request]);

        return $this->transform($member, MemberTransformer::class);
    }

    /**
     * @param GetAllMembersRequest $request
     * @return array
     */
    public function getAllMembers(GetAllMembersRequest $request)
    {
        $members = Apiato::call('Member@GetAllMembersAction', [$request]);

        return $this->transform($members, MemberTransformer::class);
    }

    /**
     * @param UpdateMemberRequest $request
     * @return array
     */
    public function updateMember(UpdateMemberRequest $request)
    {
        $member = Apiato::call('Member@UpdateMemberAction', [$request]);

        return $this->transform($member, MemberTransformer::class);
    }

    /**
     * @param DeleteMemberRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteMember(DeleteMemberRequest $request)
    {
        Apiato::call('Member@DeleteMemberAction', [$request]);

        return $this->noContent();
    }
}

<?php

namespace App\Containers\Session\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllSessionsAction extends Action
{
    public function run(Request $request)
    {
        $sessions = Apiato::call('Session@GetAllSessionsTask', [], ['addRequestCriteria']);

        return $sessions;
    }
}

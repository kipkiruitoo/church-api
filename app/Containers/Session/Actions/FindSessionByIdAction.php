<?php

namespace App\Containers\Session\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindSessionByIdAction extends Action
{
    public function run(Request $request)
    {
        $session = Apiato::call('Session@FindSessionByIdTask', [$request->id]);

        return $session;
    }
}

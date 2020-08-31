<?php

namespace App\Containers\Session\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateSessionAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->all();

        $session = Apiato::call('Session@CreateSessionTask', [$data]);

        return $session;
    }
}

<?php

namespace App\Containers\Session\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteSessionAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Session@DeleteSessionTask', [$request->id]);
    }
}

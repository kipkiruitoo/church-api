<?php

namespace App\Containers\Church\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteChurchAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Church@DeleteChurchTask', [$request->id]);
    }
}

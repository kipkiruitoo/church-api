<?php

namespace App\Containers\Seats\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteSeatsAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Seats@DeleteSeatsTask', [$request->id]);
    }
}

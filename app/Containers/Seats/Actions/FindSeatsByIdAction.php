<?php

namespace App\Containers\Seats\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindSeatsByIdAction extends Action
{
    public function run(Request $request)
    {
        $seats = Apiato::call('Seats@FindSeatsByIdTask', [$request->id]);

        return $seats;
    }
}

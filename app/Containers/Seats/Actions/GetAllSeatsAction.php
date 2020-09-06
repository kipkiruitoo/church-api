<?php

namespace App\Containers\Seats\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllSeatsAction extends Action
{
    public function run(Request $request)
    {
        $seats = Apiato::call('Seats@GetAllSeatsTask', [], ['addRequestCriteria']);

        return $seats;
    }
}

<?php

namespace App\Containers\Venue\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindVenueByIdAction extends Action
{
    public function run(Request $request)
    {
        $venue = Apiato::call('Venue@FindVenueByIdTask', [$request->id]);

        return $venue;
    }
}

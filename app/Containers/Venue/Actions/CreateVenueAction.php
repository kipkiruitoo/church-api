<?php

namespace App\Containers\Venue\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateVenueAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->all();

        $venue = Apiato::call('Venue@CreateVenueTask', [$data]);

        return $venue;
    }
}

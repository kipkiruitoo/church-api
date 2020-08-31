<?php

namespace App\Containers\Venue\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateVenueAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->all();

        $venue = Apiato::call('Venue@UpdateVenueTask', [$request->id, $data]);

        return $venue;
    }
}

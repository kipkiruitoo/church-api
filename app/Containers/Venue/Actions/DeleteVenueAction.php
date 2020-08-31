<?php

namespace App\Containers\Venue\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteVenueAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Venue@DeleteVenueTask', [$request->id]);
    }
}

<?php

namespace App\Containers\Venue\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllVenuesAction extends Action
{
    public function run(Request $request)
    {
        $venues = Apiato::call('Venue@GetAllVenuesTask', [], ['addRequestCriteria']);

        return $venues;
    }
}

<?php

namespace App\Containers\Church\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllChurchesAction extends Action
{
    public function run(Request $request)
    {
        $churches = Apiato::call('Church@GetAllChurchesTask', [], ['addRequestCriteria']);

        return $churches;
    }
}

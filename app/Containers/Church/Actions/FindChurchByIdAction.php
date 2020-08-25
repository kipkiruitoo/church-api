<?php

namespace App\Containers\Church\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindChurchByIdAction extends Action
{
    public function run(Request $request)
    {
        $church = Apiato::call('Church@FindChurchByIdTask', [$request->id]);

        return $church;
    }
}

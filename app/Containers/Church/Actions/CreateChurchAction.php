<?php

namespace App\Containers\Church\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateChurchAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $church = Apiato::call('Church@CreateChurchTask', [$data]);

        return $church;
    }
}

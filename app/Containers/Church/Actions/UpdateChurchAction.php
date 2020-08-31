<?php

namespace App\Containers\Church\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateChurchAction extends Action
{
    public function run(Request $request)
    {
        // $data = $request->sanitizeInput([
        //     // add your request data here
        // ]);

       $data = $request->all();
        $church = Apiato::call('Church@UpdateChurchTask', [$request->id, $data]);

        return $church;
    }
}

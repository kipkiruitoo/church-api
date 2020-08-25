<?php

namespace App\Containers\Session\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateSessionAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $session = Apiato::call('Session@UpdateSessionTask', [$request->id, $data]);

        return $session;
    }
}

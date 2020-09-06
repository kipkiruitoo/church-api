<?php

namespace App\Containers\Seats\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateSeatsAction extends Action
{
  public function run(Request $request)
  {
    $data = $request->all();

    $seats = Apiato::call('Seats@UpdateSeatsTask', [$request->id, $data]);

    return $seats;
  }
}

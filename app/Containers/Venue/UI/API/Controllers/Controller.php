<?php

namespace App\Containers\Venue\UI\API\Controllers;

use App\Containers\Venue\UI\API\Requests\CreateVenueRequest;
use App\Containers\Venue\UI\API\Requests\DeleteVenueRequest;
use App\Containers\Venue\UI\API\Requests\GetAllVenuesRequest;
use App\Containers\Venue\UI\API\Requests\FindVenueByIdRequest;
use App\Containers\Venue\UI\API\Requests\UpdateVenueRequest;
use App\Containers\Venue\UI\API\Transformers\VenueTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

use App\Containers\Seats\Models\Seats;
use App\Containers\Venue\Models\Venue;

/**
 * Class Controller
 *
 * @package App\Containers\Venue\UI\API\Controllers
 */
class Controller extends ApiController
{
  /**
   * @param CreateVenueRequest $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function createVenue(CreateVenueRequest $request)
  {
    $venue = Apiato::call('Venue@CreateVenueAction', [$request]);

    return $this->created($venue);
  }

  /**
   * @param FindVenueByIdRequest $request
   * @return array
   */
  public function findVenueById(FindVenueByIdRequest $request)
  {
    $venue = Apiato::call('Venue@FindVenueByIdAction', [$request]);

    return
      response()->json(["status" => "Success", "message" => "Venue Retrieved Successfully", "data" => $venue])
      ->setStatusCode(200);
  }


  /**
   * @param GetAllVenuesRequest $request
   * @return array
   */
  public function getAllVenues(GetAllVenuesRequest $request)
  {
    $venues = Apiato::call('Venue@GetAllVenuesAction', [$request]);

    return
      response()->json(["status" => "Success", "message" => "Venues Retrieved Successfully", "data" => $venues])
      ->setStatusCode(200);
  }

  /**
   * @param UpdateVenueRequest $request
   * @return array
   */
  public function updateVenue(UpdateVenueRequest $request)
  {
    $venue = Apiato::call('Venue@UpdateVenueAction', [$request]);


    return
      response()->json(["status" => "Success", "message" => "Venue Updated Successfully", "data" => $venue])
      ->setStatusCode(200);
  }

  /**
   * @param DeleteVenueRequest $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function deleteVenue(DeleteVenueRequest $request)
  {
    Apiato::call('Venue@DeleteVenueAction', [$request]);

    return  response()->json(["status" => "Success", "message" => "Venue Deleted Successfully"])
      ->setStatusCode(200);
  }

  public function getSeats($id)
  {
    $venue = Venue::findOrFail($id);

    $seats = $venue->seats;

    return
      response()->json(["status" => "Success", "message" => "Venue Seats retrieved Successfully", "data" => $seats])
      ->setStatusCode(200);
  }
}

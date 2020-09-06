<?php

namespace App\Containers\Event\UI\API\Controllers;

use App\Containers\Event\UI\API\Requests\CreateEventRequest;

use App\Containers\Event\Models\Event;
use App\Containers\Event\UI\API\Requests\DeleteEventRequest;
use App\Containers\Event\UI\API\Requests\GetAllEventsRequest;
use App\Containers\Event\UI\API\Requests\FindEventByIdRequest;
use App\Containers\Event\UI\API\Requests\UpdateEventRequest;
use App\Containers\Event\UI\API\Transformers\EventTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Event\UI\API\Controllers
 */
class Controller extends ApiController
{
  /**
   * @param CreateEventRequest $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function createEvent(CreateEventRequest $request)
  {
    $event = Apiato::call('Event@CreateEventAction', [$request]);

    return $this->created($event);
  }

  /**
   * @param FindEventByIdRequest $request
   * @return array
   */
  public function findEventById(FindEventByIdRequest $request)
  {
    $event = Apiato::call('Event@FindEventByIdAction', [$request]);

    return
      response()->json(["status" => "Success", "message" => "Event Retrieved Successfully", "data" => $event])
      ->setStatusCode(200);
  }

  /**
   * @param GetAllEventsRequest $request
   * @return array
   */
  public function getAllEvents(GetAllEventsRequest $request)
  {
    $events = Apiato::call('Event@GetAllEventsAction', [$request]);

    return
      response()->json(["status" => "Success", "message" => "Events Retrieved Successfully", "data" => $events])
      ->setStatusCode(200);
  }

  /**
   * @param UpdateEventRequest $request
   * @return array
   */
  public function updateEvent(UpdateEventRequest $request)
  {
    $event = Apiato::call('Event@UpdateEventAction', [$request]);

    return
      response()->json(["status" => "Success", "message" => "Event Updated Successfully", "data" => $event])
      ->setStatusCode(200);
  }

  /**
   * @param DeleteEventRequest $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function deleteEvent(DeleteEventRequest $request)
  {
    Apiato::call('Event@DeleteEventAction', [$request]);

    return $this->noContent();
  }

  public function getsessions($id)
  {

    $event = Event::find($id);
    $sessions = $event->sessions;

    return
      response()->json(["status" => "Success", "message" => "Event Sessions retrieved successfully", "data" => $sessions])
      ->setStatusCode(200);
  }
}

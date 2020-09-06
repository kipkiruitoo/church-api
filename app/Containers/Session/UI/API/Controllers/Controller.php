<?php

namespace App\Containers\Session\UI\API\Controllers;

use App\Containers\Session\UI\API\Requests\CreateSessionRequest;
use App\Containers\Session\UI\API\Requests\DeleteSessionRequest;
use App\Containers\Session\UI\API\Requests\GetAllSessionsRequest;
use App\Containers\Session\UI\API\Requests\FindSessionByIdRequest;
use App\Containers\Session\UI\API\Requests\UpdateSessionRequest;
use App\Containers\Session\UI\API\Transformers\SessionTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Support\Facades\DB;
use App\Containers\Session\Models\Session;
use Apiato\Core\Foundation\Facades\Apiato;

use App\Containers\Venue\Models\Venue;
// use App\Ship\Parents\Requests\Request;

use Illuminate\Http\Request;

/**
 * Class Controller
 *
 * @package App\Containers\Session\UI\API\Controllers
 */
class Controller extends ApiController
{
  /**
   * @param CreateSessionRequest $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function createSession(CreateSessionRequest $request)
  {
    $session = Apiato::call('Session@CreateSessionAction', [$request]);

    return $this->created($session);
  }

  /**
   * @param FindSessionByIdRequest $request
   * @return array
   */
  public function findSessionById(FindSessionByIdRequest $request)
  {
    $session = Apiato::call('Session@FindSessionByIdAction', [$request]);

    return
      response()->json(["status" => "Success", "message" => "Session Retrieved Successfully", "data" => $session])
      ->setStatusCode(200);
  }

  /**
   * @param GetAllSessionsRequest $request
   * @return array
   */
  public function getAllSessions(GetAllSessionsRequest $request)
  {
    $sessions = Apiato::call('Session@GetAllSessionsAction', [$request]);

    return
      response()->json(["status" => "Success", "message" => "Sessions Retrieved Successfully", "data" => $sessions])
      ->setStatusCode(200);
  }

  /**
   * @param UpdateSessionRequest $request
   * @return array
   */
  public function updateSession(UpdateSessionRequest $request)
  {
    $session = Apiato::call('Session@UpdateSessionAction', [$request]);

    return
      response()->json(["status" => "Success", "message" => "Session Updated Successfully", "data" => $session])
      ->setStatusCode(200);
  }

  /**
   * @param DeleteSessionRequest $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function deleteSession(DeleteSessionRequest $request)
  {
    Apiato::call('Session@DeleteSessionAction', [$request]);

    return  response()->json(["status" => "Success", "message" => "Session Deleted Successfully"])
      ->setStatusCode(200);
  }

  public function addMemberstoSession(Request $request)
  {
    $church_id = $request->church_id;
    $member_id = $request->member_id;
    $temperature = $request->temperature;
    $session_id = $request->session_id;

    $session = Session::find($session_id);

    // get the associated venue
    $venue = $session->venue;
    // get capacity of that venue
    $capacity = $venue->capacity;


    


    if (is_null($session)) {
      return $this->json([
        'status' => 'failed',
        'message' => 'church session not found'
      ]);
    }

    $exists = DB::table('member_session')
      ->where('member_id', $member_id)
      ->where('session_id', $session_id)
      ->count() > 0;

    if ($exists) {
      return $this->json([
        'status' => 'failed',
        'message' => 'Member Already added to this session'
      ]);
    }

    $session->members()->attach($session_id, [
      'member_id' =>  $member_id,
      'temperature' => $temperature
    ]);

    return $this->json([
      'status' => 'success',
      'message' => 'Member Successfully Added to the church session'
    ]);
  }

  public function getSessionMembers($session)
  {
    $session = Session::find($session);
    if (is_null($session)) {
      return $this->json([
        'status' => 'failed',
        'message' => 'church session not found'
      ]);
    }

    $members = $session->members->toArray();
    // var_dump($sessions);


    return $this->json([
      'status' => 'success',
      'message' => 'Members in the church session Successfully Retrieved',
      'data' => $members
    ]);
  }
}

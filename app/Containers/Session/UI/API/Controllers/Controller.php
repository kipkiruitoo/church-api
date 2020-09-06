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

use Illuminate\Support\Arr;
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




    $current_capacity = DB::table('member_session')
      ->where('session_id', $session_id)
      ->count() + DB::table('user_session')
      ->where('session_id', $session_id)
      ->count();


    if (is_null($session)) {
      return $this->json([
        'status' => 'failed',
        'message' => 'church session not found'
      ])->setStatusCode(404);
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

    // check if capacity is full

    if ($current_capacity >= $capacity) {
      return $this->json([
        'status' => 'failed',
        'message' => 'Venue is  already full'
      ]);
    }

    // get a seat number for new member

    $seats = $venue->seats->pluck('id');
    $seats = join(",", $seats->toArray());

    $seats = explode(",", $seats);


    // var_dump($seats);
    $taken =   DB::table('user_session')->where('session_id', $session_id)->get()->pluck('seat_id');

    $taken_seats =
      DB::table('member_session')->where('session_id', $session_id)->get()->pluck('seat_id');





    $taken_seats = join(",", $taken_seats->toArray());


    $taken  =
      join(",", $taken->toArray());


    $taken = explode(",", $taken);

    $taken_seats = explode(",", $taken_seats);



    $taken_seats = array_merge($taken_seats, $taken);

    $remaining_seats = array_diff($seats, $taken_seats);


    $seat = Arr::random($remaining_seats);

    // print_r($seat);

    $session->members()->attach($session_id, [
      'member_id' =>  $member_id,
      'temperature' => $temperature,
      'seat_id' => $seat
    ]);

    return $this->json([
      'status' => 'success',
      'message' => 'Member Successfully Added to the church session',
      'data' => [
        "seat_id" => $seat
      ]
    ]);
  }

  public function addUserstoSession(Request $request)
  {
    $church_id = $request->church_id;
    $member_id = $request->user_id;
    $temperature = $request->temperature;
    $session_id = $request->session_id;

    $session = Session::find($session_id);

    // get the associated venue
    $venue = $session->venue;
    // get capacity of that venue
    $capacity = $venue->capacity;



    $current_capacity = DB::table('member_session')
      ->where('session_id', $session_id)
      ->count() + DB::table('user_session')
      ->where('session_id', $session_id)
      ->count();


    if (is_null($session)) {
      return $this->json([
        'status' => 'failed',
        'message' => 'church session not found'
      ])->setStatusCode(404);
    }


    $exists = DB::table('user_session')
      ->where('user_id', $member_id)
      ->where('session_id', $session_id)
      ->count() > 0;

    if ($exists) {
      return $this->json([
        'status' => 'failed',
        'message' => 'User Already added to this session'
      ]);
    }

    // check if capacity is full

    if ($current_capacity >= $capacity) {
      return $this->json([
        'status' => 'failed',
        'message' => 'Venue is  already full'
      ]);
    }

    // get a seat number for new member

    $seats = $venue->seats->pluck('id');
    $seats = join(",", $seats->toArray());

    $seats = explode(",", $seats);


    // var_dump($seats);
    $taken =   DB::table('user_session')->where('session_id', $session_id)->get()->pluck('seat_id');

    $taken_seats =
      DB::table('member_session')->where('session_id', $session_id)->get()->pluck('seat_id');





    $taken_seats = join(",", $taken_seats->toArray());


    $taken  =
      join(",", $taken->toArray());


    $taken = explode(",", $taken);

    $taken_seats = explode(",", $taken_seats);



    $taken_seats = array_merge($taken_seats, $taken);
    // var_dump($taken_seats);

    $remaining_seats = array_diff($seats, $taken_seats);


    $seat = Arr::random($remaining_seats);

    // print_r($seat);

    $session->users()->attach($session_id, [
      'user_id' =>  $member_id,
      'temperature' => $temperature,
      'seat_id' => $seat
    ]);

    return $this->json([
      'status' => 'success',
      'message' => 'User Successfully Added to the church session',
      'data' => [
        "seat_id" => $seat
      ]
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

  public function getSessionUsers($session)
  {
    $session = Session::find($session);
    if (is_null($session)) {
      return $this->json([
        'status' => 'failed',
        'message' => 'Session not found'
      ]);
    }

    $members = $session->users->toArray();
    // var_dump($sessions);


    return $this->json([
      'status' => 'success',
      'message' => 'Users in the  session Successfully Retrieved',
      'data' => $members
    ]);
  }
}

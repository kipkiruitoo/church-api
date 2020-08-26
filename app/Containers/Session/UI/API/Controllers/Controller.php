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

    return $this->created($this->transform($session, SessionTransformer::class));
  }

  /**
   * @param FindSessionByIdRequest $request
   * @return array
   */
  public function findSessionById(FindSessionByIdRequest $request)
  {
    $session = Apiato::call('Session@FindSessionByIdAction', [$request]);

    return $this->transform($session, SessionTransformer::class);
  }

  /**
   * @param GetAllSessionsRequest $request
   * @return array
   */
  public function getAllSessions(GetAllSessionsRequest $request)
  {
    $sessions = Apiato::call('Session@GetAllSessionsAction', [$request]);

    return $this->transform($sessions, SessionTransformer::class);
  }

  /**
   * @param UpdateSessionRequest $request
   * @return array
   */
  public function updateSession(UpdateSessionRequest $request)
  {
    $session = Apiato::call('Session@UpdateSessionAction', [$request]);

    return $this->transform($session, SessionTransformer::class);
  }

  /**
   * @param DeleteSessionRequest $request
   * @return \Illuminate\Http\JsonResponse
   */
  public function deleteSession(DeleteSessionRequest $request)
  {
    Apiato::call('Session@DeleteSessionAction', [$request]);

    return $this->noContent();
  }

  public function addMemberstoSession(Request $request)
  {
    $church_id = $request->church_id;
    $member_id = $request->member_id;
    $temperature = $request->temperature;
    $session_id = $request->session_id;

    $session = Session::find($session_id);

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

<?php

namespace App\Containers\Session\UI\API\Controllers;

use App\Containers\Session\UI\API\Requests\CreateSessionRequest;
use App\Containers\Session\UI\API\Requests\DeleteSessionRequest;
use App\Containers\Session\UI\API\Requests\GetAllSessionsRequest;
use App\Containers\Session\UI\API\Requests\FindSessionByIdRequest;
use App\Containers\Session\UI\API\Requests\UpdateSessionRequest;
use App\Containers\Session\UI\API\Transformers\SessionTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Requests\Request;

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
    dd($request);
  }
}

<?php

namespace App\Containers\Church\UI\API\Controllers;

use App\Containers\Church\UI\API\Requests\CreateChurchRequest;
use App\Containers\Church\UI\API\Requests\DeleteChurchRequest;
use App\Containers\Church\UI\API\Requests\GetAllChurchesRequest;
use App\Containers\Church\UI\API\Requests\FindChurchByIdRequest;
use App\Containers\Church\UI\API\Requests\UpdateChurchRequest;
use App\Containers\Church\UI\API\Transformers\ChurchTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Church\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateChurchRequest $request 
     * @return \Illuminate\Http\JsonResponse
     */
    public function createChurch(CreateChurchRequest $request)
    {
        $church = Apiato::call('Church@CreateChurchAction', [$request]);

        return $this->created($this->transform($church, ChurchTransformer::class));
    }

    /**
     * @param FindChurchByIdRequest $request
     * @return array
     */
    public function findChurchById(FindChurchByIdRequest $request)
    {
        $church = Apiato::call('Church@FindChurchByIdAction', [$request]);

        return $this->transform($church, ChurchTransformer::class);
    }

    /**
     * @param GetAllChurchesRequest $request
     * @return array
     */
    public function getAllChurches(GetAllChurchesRequest $request)
    {
        $churches = Apiato::call('Church@GetAllChurchesAction', [$request]);

        return $this->transform($churches, ChurchTransformer::class);
    }

    /**
     * @param UpdateChurchRequest $request
     * @return array
     */
    public function updateChurch(UpdateChurchRequest $request)
    {
        $church = Apiato::call('Church@UpdateChurchAction', [$request]);

        return $this->transform($church, ChurchTransformer::class);
    }

    /**
     * @param DeleteChurchRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteChurch(DeleteChurchRequest $request)
    {
        Apiato::call('Church@DeleteChurchAction', [$request]);

        return $this->noContent();
    }
}

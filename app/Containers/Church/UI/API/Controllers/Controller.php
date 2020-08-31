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
use App\Containers\Church\Models\Church;

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
       

        // var_dump($request->all());
        $church =  new Church;
        $church->name = $request->name;
        $church->location = $request->location;
        $church->seats = $request->seats;

        // dd($church);
        if ($church->save()) {
            return 
        response()->json(["status"=>"Success", "message"=>"Organization Created Successfully", "data"=> $church->toArray()])
        ->setStatusCode(201);
        }else {
            return ["message" => "An Error Occurred"]->response()->setStatusCode(422);
        }

        
    
      
       
    }

    /**
     * @param FindChurchByIdRequest $request
     * @return array
     */
    public function findChurchById(FindChurchByIdRequest $request)
    {
        $church = Apiato::call('Church@FindChurchByIdAction', [$request]);


        return 
        response()->json(["status"=>"Success", "message"=>"Organization Retrieved Successfully", "data"=> $church])
        ->setStatusCode(200);
        // return $this->transform($church, ChurchTransformer::class);
    }

    /**
     * @param GetAllChurchesRequest $request
     * @return array
     */
    public function getAllChurches(GetAllChurchesRequest $request)
    {
        $churches = Apiato::call('Church@GetAllChurchesAction', [$request]);

        // return $this->transform($churches, ChurchTransformer::class);
        return 
        response()->json(["status"=>"Success", "message"=>"Organizations Retrieved Successfully", "data"=> $churches])
        ->setStatusCode(200);
    }

    /**
     * @param UpdateChurchRequest $request
     * @return array
     */
    public function updateChurch(UpdateChurchRequest $request)
    {
        $church = Apiato::call('Church@UpdateChurchAction', [$request]);

         return 
        response()->json(["status"=>"Success", "message"=>"Organizations Updated Successfully", "data"=> $church])
        ->setStatusCode(200);
    }

    /**
     * @param DeleteChurchRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteChurch(DeleteChurchRequest $request)
    {
        Apiato::call('Church@DeleteChurchAction', [$request]);

      return  response()->json(["status"=>"Success", "message"=>"Organization Deleted Successfully"])
        ->setStatusCode(200);
    }
}

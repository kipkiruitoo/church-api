<?php

namespace App\Containers\Seats\UI\API\Transformers;

use App\Containers\Seats\Models\Seats;
use App\Ship\Parents\Transformers\Transformer;

class SeatsTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param Seats $entity
     *
     * @return array
     */
    public function transform(Seats $entity)
    {
        $response = [
            'object' => 'Seats',
            'id' => $entity->getHashedKey(),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}

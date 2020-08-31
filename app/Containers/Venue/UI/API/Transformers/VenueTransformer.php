<?php

namespace App\Containers\Venue\UI\API\Transformers;

use App\Containers\Venue\Models\Venue;
use App\Ship\Parents\Transformers\Transformer;

class VenueTransformer extends Transformer
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
     * @param Venue $entity
     *
     * @return array
     */
    public function transform(Venue $entity)
    {
        $response = [
            'object' => 'Venue',
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

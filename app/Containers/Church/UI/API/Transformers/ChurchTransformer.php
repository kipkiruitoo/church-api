<?php

namespace App\Containers\Church\UI\API\Transformers;

use App\Containers\Church\Models\Church;
use App\Ship\Parents\Transformers\Transformer;

class ChurchTransformer extends Transformer
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
     * @param Church $entity
     *
     * @return array
     */
    public function transform(Church $entity)
    {
        $response = [
            'object' => 'Church',
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

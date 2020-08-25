<?php

namespace App\Containers\Session\UI\API\Transformers;

use App\Containers\Session\Models\Session;
use App\Ship\Parents\Transformers\Transformer;

class SessionTransformer extends Transformer
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
     * @param Session $entity
     *
     * @return array
     */
    public function transform(Session $entity)
    {
        $response = [
            'object' => 'Session',
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

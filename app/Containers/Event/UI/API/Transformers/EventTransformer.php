<?php

namespace App\Containers\Event\UI\API\Transformers;

use App\Containers\Event\Models\Event;
use App\Ship\Parents\Transformers\Transformer;

class EventTransformer extends Transformer
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
     * @param Event $entity
     *
     * @return array
     */
    public function transform(Event $entity)
    {
        $response = [
            'object' => 'Event',
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

<?php

namespace App\Containers\Member\UI\API\Transformers;

use App\Containers\Member\Models\Member;
use App\Ship\Parents\Transformers\Transformer;

class MemberTransformer extends Transformer
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
     * @param Member $entity
     *
     * @return array
     */
    public function transform(Member $entity)
    {
        $response = [
            'object' => 'Member',
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

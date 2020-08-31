<?php

namespace App\Containers\Church\Data\Transporters;

use App\Ship\Parents\Transporters\Transporter;

class CreateChurchTransporter extends Transporter
{

    /**
     * @var array
     */
    protected $schema = [
        'type' => 'object',
        'properties' => [
            'id', 'name', 'location', 'seats'

            // allow for undefined properties
            // 'additionalProperties' => true,
        ],
        'required'   => [
            // define the properties that MUST be set
        ],
        'default'    => [
            // provide default values for specific properties here
        ]
    ];
}

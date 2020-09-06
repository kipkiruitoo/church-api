<?php

namespace App\Containers\Seats\Models;

use App\Ship\Parents\Models\Model;

class Seats extends Model
{
    protected $fillable = [
      'name', 'church_id', 'venue_id'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'seats';
}
